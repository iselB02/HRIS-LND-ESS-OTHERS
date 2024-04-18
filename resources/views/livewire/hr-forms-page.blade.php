<div class="hrformspage_container">
    <div class="hrforms-banner">
        <img id="hrforms_img" src="{{ asset('images/plm_bg.jpg') }}" alt="plm">
        <h1 id="hrforms-h1">Human Resources Forms</h1>
    </div>
    <div class="column">
        <div class="option">
            <button class="button">Fill up Personal Data Sheet (PDS)</button>
        </div>

        <div class="option">
            <button class="button">Fill up Statement of Assets</button>
        </div>

        <div class="option">
            <button class="button">Fill up Liabilities and Net Worth (SALN)</button>
        </div>

        <div class="option">
            <button class="button">Fill up Leave Form</button>
        </div>

        <div class="option">
            <button class="button">Fill up Permits</button>
        </div>

        <div class="option">
            <button class="button">Fill up Forms for Travel Abroad</button>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/hrformspage.css') }}">
@endpush
