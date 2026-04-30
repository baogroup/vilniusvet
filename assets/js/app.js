document.addEventListener('DOMContentLoaded', function () {
    const banner = document.getElementById('cookieBanner');
    const savedChoice = localStorage.getItem('vv_cookie_choice');

    if (banner && !savedChoice) {
        banner.hidden = false;
    }

    document.querySelectorAll('[data-cookie-choice]').forEach(function (button) {
        button.addEventListener('click', function () {
            localStorage.setItem('vv_cookie_choice', button.getAttribute('data-cookie-choice'));
            if (banner) {
                banner.hidden = true;
            }
        });
    });
});
