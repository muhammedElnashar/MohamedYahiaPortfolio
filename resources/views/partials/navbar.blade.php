<nav>
    <div class="logo" onclick="goHome()"><div class="logo-ring"><i data-lucide="trending-up"></i></div><div class="logo-name">Mohamed <em>Yahia</em></div></div>
    <div class="nav-links">
        <button class="nl" onclick="sc('about')"><span class="ari">عني</span><span class="eni">About</span></button>
        <button class="nl" onclick="sc('services')"><span class="ari">الخدمات</span><span class="eni">Services</span></button>
        <button class="nl" onclick="sc('cases')"><span class="ari">النتائج</span><span class="eni">Results</span></button>
        <button class="nl" onclick="sc('tools')"><span class="ari">الأدوات</span><span class="eni">Tools</span></button>
        <button class="nl" onclick="sc('contact')"><span class="ari">تواصل</span><span class="eni">Contact</span></button>
    </div>
    <div class="nav-right">
        <button class="tbtn" onclick="toggleTheme()"><i data-lucide="moon" id="theme-icon"></i></button>
{{--
        <div class="lswitch"><button class="lbtn on" id="btn-ar" onclick="setLang('ar')">AR</button><button class="lbtn" id="btn-en" onclick="setLang('en')">EN</button></div>
--}}
        <div class="lswitch">

            <a
                class="lbtn {{ app()->getLocale() === 'ar' ? 'on' : '' }}"
                href="{{ switchLocaleUrl('ar') }}"
            >
                AR
            </a>

            <a
                class="lbtn {{ app()->getLocale() === 'en' ? 'on' : '' }}"
                href="{{ switchLocaleUrl('en') }}"
            >
                EN
            </a>

        </div>
        <button class="ncta" onclick="sc('contact')"><i data-lucide="message-circle"></i><span class="ari">استشارة مجانية</span><span class="eni">Free Consult</span></button>
        <div class="hamburger" id="hamburger" onclick="toggleMenu()"><span></span><span></span><span></span></div>
    </div>
</nav>
