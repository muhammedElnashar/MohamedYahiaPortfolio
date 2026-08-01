<?php

namespace App\View\Composers;

use App\Services\SchemaService;
use Illuminate\View\View;

class SchemaComposer
{
    public function __construct(
        protected SchemaService $schemaService
    ) {}

    public function compose(View $view): void
    {
        $routeName = optional(request()->route())->getName();

        $schemas = match ($routeName) {

            'home' => $this->schemaService->home(),

            'about' => $this->schemaService->about(),

            'services.show' => $this->fromRouteModel('service', fn ($service) => $this->schemaService->service(
                tap($service)->load(['faqs', 'category'])
            )),

            'skills.show' => $this->fromRouteModel('skill', fn ($skill) => $this->schemaService->skill(
                tap($skill)->load('page')
            )),

            'platforms.show' => $this->fromRouteModel('platform', fn ($platform) => $this->schemaService->platform(
                tap($platform)->load('faqs')
            )),

            'blogs.show' => $this->fromBlogSlug(),

            'blogs.index' => $this->schemaService->blogIndex(
                \App\Models\Blog::latest()->get()
            ),

            default => [],
        };

        $view->with('schemas', $schemas);
    }

    /**
     * ياخد الموديل اللي Laravel عمله route-model-binding خلاصه بالفعل
     * (يعني من غير ما نعمل query تاني، بنستخدم نفس الموديل اللي وصل للـ Controller)
     */
    protected function fromRouteModel(string $paramName, \Closure $callback): array
    {
        $model = request()->route($paramName);

        if (! $model || ! is_object($model)) {
            return [];
        }

        return $callback($model);
    }

    protected function fromBlogSlug(): array
    {
        $slug = request()->route('slug');

        if (! $slug) {
            return [];
        }

        $blog = \App\Models\Blog::where('slug', $slug)
            ->with(['faqs', 'tags', 'category'])
            ->first();

        return $blog ? $this->schemaService->blog($blog) : [];
    }
}
