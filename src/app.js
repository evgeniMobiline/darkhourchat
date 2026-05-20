const ready = fn => document.readyState !== 'loading' ? fn() : document.addEventListener('DOMContentLoaded', fn);

const mMenu = () => {
    console.log('test');
    $("#mobile-menu-btn").click(function(e) {
        $(".site-mmenu").addClass("active", 1e3);
    });
    $("#mobile-menu-close").click(function(e) {
        $(".site-mmenu").removeClass("active", 1e3);
    });
};

const faqTabs = () => {
    $(".faq-item-title").on("click", function(e){
        e.preventDefault();
        $(this).toggleClass("active");
        $(this).next().stop().slideToggle();
    });
}

ready( () => {
    mMenu();
    faqTabs();
});