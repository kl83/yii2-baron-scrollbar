document.addEventListener("DOMContentLoaded", function () {
    let items = document.getElementsByClassName('baron');
    for (let i = 0; i < items.length; i++) {
        let options = JSON.parse(items[i].dataset.options);
        options.root = items[i];
        baron(options);
    }
});
