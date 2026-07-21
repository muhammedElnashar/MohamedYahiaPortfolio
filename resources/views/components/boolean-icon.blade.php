<span style="
display:inline-flex;
align-items:center;
justify-content:center;
width:24px;
height:24px;
border-radius:50%;
background:{{ $value ? 'rgba(34,197,94,.15)' : 'rgba(239,68,68,.1)' }}">
    <i
        data-lucide="{{ $value ? 'check' : 'x' }}"
        style="width:13px;height:13px;stroke:{{ $value ? '#22c55e' : '#ef4444' }}">
    </i>
</span>
