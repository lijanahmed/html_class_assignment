// ১. HTML উপাদানগুলোকে ID দিয়ে ধরা (Select)
const heading = document.getElementById("myHeading");
const button = document.getElementById("colorBtn");

// ২. বাটনে ক্লিক করলে কী হবে তার নির্দেশনা (Event Listener)
button.addEventListener("click", function() {
    // HTML টেক্সট পরিবর্তন করা
    heading.textContent = "JavaScript দিয়ে লেখাটি বদলে গেল!";
    
    // CSS স্টাইল পরিবর্তন করা
    heading.style.color = "blue";
    heading.style.backgroundColor = "yellow";
});