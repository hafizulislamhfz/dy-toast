<script>
    // Create the toast container dynamically
    const toastContainer = document.createElement("div");
    toastContainer.id = "toast-container";
    toastContainer.className =
        "fixed ml-3 top-2 md:top-5 right-2 md:right-5 z-50 flex flex-col space-y-2 items-end pointer-events-none global-transition";

    // Append the container to the end of the body
    document.body.appendChild(toastContainer);

    function toast(message, type = "success", timeout = 5000) {
        // Create a new toast element
        const toast = document.createElement("div");
        toast.className = `toast pointer-events-auto w-fit max-w-md px-4 py-3 rounded-md shadow-2xl transition-all transform duration-300 ease-in-out flex justify-between items-center cursor-context-menu ${
        type === "success"
            ? "bg-gradient-to-r from-[#306819] to-[#174225] text-white"
            : type === "error"
            ? "bg-gradient-to-r from-[#b03333] to-[#b42828] text-white"
            : type === "warning"
            ? "bg-gradient-to-r from-[#c99c30] to-[#d29910] text-white"
            : type === "info"
            ? "bg-gradient-to-r from-[#505e91] to-[#37448f] text-white"
            : "bg-blue-500"
        }`;

        // Add status icon
        const icon = document.createElement("span");
        icon.className = "text-white-a70 mr-2";
        icon.innerHTML = `${
        type === "success"
            ? `<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24"><path d="M12 0C5.371 0 0 5.373 0 12s5.371 12 12 12 12-5.373 12-12S18.629 0 12 0zm-2 18-5-5.001L6.501 11 10 14.501 17.5 7 19 8.5 10 18z"/></svg>`
            : type === "error"
            ? `<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/></svg>`
            : type === "warning"
            ? `<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480L40 480c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24l0 112c0 13.3 10.7 24 24 24s24-10.7 24-24l0-112c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>`
            : type === "info"
            ? `<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336l24 0 0-64-24 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l48 0c13.3 0 24 10.7 24 24l0 88 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-80 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>`
            : `<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24"><path d="M12 0C5.371 0 0 5.373 0 12s5.371 12 12 12 12-5.373 12-12S18.629 0 12 0zm-2 16H6v-2h4v2zm0-4H6v-2h4v2zm0-4H6V6h4v2zm10 8h-4v-2h4v2zm0-4h-4v-2h4v2zm0-4h-4V6h4v2z"/></svg>`
        }`;

        // Add the message content
        const messageDiv = document.createElement("div");
        messageDiv.textContent = message;
        messageDiv.className = "flex-1 font-normal text-md";

        // Add the close button
        const closeButton = document.createElement("button");
        closeButton.className =
            "ml-4 text-red-400 border border-transparent hover:text-red-500 hover:border hover:border-red-600 hover:rounded-full transition-all duration-900 ease-in-out";
        closeButton.innerHTML =
            `<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>`;
        closeButton.onclick = () => {
            toast.classList.remove("opacity-100", "translate-x-0", "scale-100");
            toast.classList.add("opacity-0", "translate-x-[20rem]", "scale-95");
            setTimeout(() => toast.remove(), 300); // Remove after fade-out
        };

        // Append icon, message, and close button to toast
        toast.appendChild(icon);
        toast.appendChild(messageDiv);
        toast.appendChild(closeButton);

        // Append the toast to the container
        const toastContainer = document.getElementById("toast-container");
        toastContainer.prepend(toast);

        // Show toast with smoother animation
        toast.classList.add("opacity-0", "translate-x-[20rem]", "scale-95");
        setTimeout(() => {
            toast.classList.remove("opacity-0", "translate-x-[20rem]", "scale-95");
            toast.classList.add("opacity-100", "translate-x-0", "scale-100");
        }, 50);

        // Auto-remove the toast after timeout
        let hideTimeout = setTimeout(() => {
            toast.classList.remove("opacity-100", "translate-x-0", "scale-100");
            toast.classList.add("opacity-0", "translate-x-[20rem]", "scale-95");
            setTimeout(() => toast.remove(), 300); // Remove after fade-out
        }, timeout);

        toast.addEventListener("mouseover", () => clearTimeout(hideTimeout));
        toast.addEventListener(
            "mouseleave",
            () =>
            (hideTimeout = setTimeout(() => {
                toast.classList.add(
                    "opacity-0",
                    "translate-x-[20rem]",
                    "scale-95"
                );
                setTimeout(() => toast.remove(), 300);
            }, timeout))
        );
    }

    // to use toast from backend
    @if (session('toast'))
        document.addEventListener('DOMContentLoaded', () => {
            const toastData = @json(session('toast'));
            toast(toastData.message, toastData.type, toastData.timeout || 5000);
            @php
                session()->forget('toast');

            @endphp
        });
    @endif

    // Add shorthand methods for different toast types
    toast.success = (message, timeout = 5000) => toast(message, "success", timeout);
    toast.error = (message, timeout = 5000) => toast(message, "error", timeout);
    toast.warning = (message, timeout = 5000) => toast(message, "warning", timeout);
    toast.info = (message, timeout = 5000) => toast(message, "info", timeout);
</script>
