import "preline";
import "@preline/overlay";
import "@preline/dropdown";
import "flowbite";
import Typed from "typed.js";

const typedElement = document.getElementById("typed");
if (typedElement != null) {
    let typed = new Typed("#typed", {
        strings: [
            `"Hal-hal yang ingin kutahu ada di dalam buku, sahabat terbaik adalah orang yang akan memberikanku sebuah buku yang belum aku ketahui" - Abraham Lincoln`,
            `"Siapapun yang terhibur dengan buku-buku, kebahagiaan tak akan sirna dari dirinya." – Ali bin Abi Thalib`,
            `"Buku itu seperti cermin: kalau yang berkaca padanya adalah seorang yang bodoh, engkau tak bisa berharap yang terpantul adalah seorang yang jenius" - J.K Rowling`,
            `"Ada kejahatan yang lebih kejam daripada membakar buku. Salah satunya adalah tidak membacanya." - Joseph Brodsky`,
            `"Ada lebih banyak harta di dalam buku daripada yang di dapat perampok di Pulau Harta." - Walt Disney`,
        ],
        typeSpeed: 20,
        loop: true,
        loopCount: Infinity,
        shuffle: true,
        backDelay: 2000,
    });
}
