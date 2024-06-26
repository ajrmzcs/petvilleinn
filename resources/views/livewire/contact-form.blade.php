<div id="contact_form">
    <form wire:submit.prevent="submit">
        <div class="mt-3">
            <label>Name<span class="required">*</span></label>
            <input type="text" name="name" class="form-control input-field mb-0 @error('name') input-validation-error-bg @enderror" wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mt-3">
            <label>Email Address <span class="required">*</span></label>
            <input type="email" name="email" class="form-control input-field mb-0 @error('email') input-validation-error-bg @enderror" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mt-3">
            <label>Subject</label>
            <input type="text" name="subject" class="form-control input-field" wire:model="subject">
        </div>
        <div class="mt-3">
            <label>Message<span class="required">*</span></label>
            <textarea name="message" id="message" class="textarea-field form-control mb-0 @error('message') input-validation-error-bg @enderror" rows="3" wire:model="message"></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <!-- Google Recaptcha -->
        <div id="captcha" class="mt-4" wire:ignore></div>
        <button type="submit" id="submit_btn" value="Submit" class="btn center-block">Send message</button>
    </form>
</div>

<!--Recaptcha -->
<script src="https://www.google.com/recaptcha/api.js?onload=handle&render=explicit" async defer></script>
<script>
    const verify = function (response) {
        @this.set('captcha', response);
    };
    function handle(e) {
        widget = grecaptcha.render('captcha', {
            'sitekey': '{{ config('services.recaptcha.key') }}',
            'theme': 'light', // you could switch between dark and light mode.
            'callback': verify
        });
    };
</script>
@script
<script>
    $wire.on('notification', (e) => {
        Swal.fire({
            position: "top-end",
            icon: e.type,
            title: e.message,
            showConfirmButton: false,
            timer: 2500,
            didDestroy: () => {
                // This function will be executed after the alert is shown
                location.reload();
                // You can execute any code you want here
            }
        });
    });
</script>
@endscript

