document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const input = document.querySelector("input[name='task']");

    form.addEventListener("submit", function (e) {
        if (input.value.trim() === "") {
            alert("Task khali nahi ho sakta!");
            e.preventDefault();
        }
    });
});