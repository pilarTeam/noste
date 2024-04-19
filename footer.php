<!--     <script type="text/javascript">
        // Grid List View

        const gridViewBtn = document.getElementById("grid-view-btn");
        const listViewBtn = document.getElementById("list-view-btn");
        const cardGridItem = document.querySelector(".card_grid_item");
        const cardListItem = document.querySelector(".card_list_item");

        // Add click event listeners to the buttons
        gridViewBtn.addEventListener("click", () => {
            // Show grid view and hide list view
            cardGridItem.classList.remove("hidden");
            cardGridItem.classList.add("grid");
            cardListItem.classList.add("hidden");
            gridViewBtn.classList.add("active");
            listViewBtn.classList.remove("active");
        });

        listViewBtn.addEventListener("click", () => {
            // Show list view and hide grid view
            cardGridItem.classList.add("hidden");
            cardListItem.classList.remove("hidden");
            gridViewBtn.classList.remove("active");
            listViewBtn.classList.add("active");
        });

        // Profile Dropdown
        const dropdownToggle = document.getElementById("dropdown-toggle");
        const dropdownMenu = document.getElementById("dropdown-menu");

        // Toggle dropdown menu on click
        dropdownToggle.addEventListener("click", () => {
            dropdownMenu.classList.toggle("hidden");
        });

        // Hide dropdown menu when clicking outside of it
        document.addEventListener("click", (event) => {
            const targetElement = event.target;
            if (!targetElement.closest(".dropdown")) {
                dropdownMenu.classList.add("hidden");
            }
        });

        // Active Inactive item
        document.addEventListener("DOMContentLoaded", function () {
            const cards = document.querySelectorAll(".card_item");

            const showAllBtn = document.getElementById("showAllBtn");
            const showActiveBtn = document.getElementById("showActiveBtn");
            const showInactiveBtn = document.getElementById("showInactiveBtn");
            const buttonList = document.getElementById("buttonList");

            function setActiveButton(btn) {
                // Remove active class from all buttons
                buttonList
                    .querySelectorAll("li")
                    .forEach((li) => li.classList.remove("active"));
                // Add active class to the clicked button's parent li
                btn.parentNode.classList.add("active");
            }

            showAllBtn.addEventListener("click", function () {
                cards.forEach((card) => card.classList.remove("hidden"));
                setActiveButton(this);
            });

            showActiveBtn.addEventListener("click", function () {
                cards.forEach((card) => {
                    card.classList.contains("active")
                        ? card.classList.remove("hidden")
                        : card.classList.add("hidden");
                });
                setActiveButton(this);
            });

            showInactiveBtn.addEventListener("click", function () {
                cards.forEach((card) => {
                    card.classList.contains("inactive")
                        ? card.classList.remove("hidden")
                        : card.classList.add("hidden");
                });
                setActiveButton(this);
            });
        });

        // Image Upload
        document
            .getElementById("FileUpload1")
            .addEventListener("change", function (event) {
                const input = event.target;
                const text = document.getElementById("text");
                const avatarImage = document.getElementById("avatarImage");

                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        avatarImage.src = e.target.result;
                        text.classList.add("hidden");
                        avatarImage.classList.remove("hidden");
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            });
        
    </script>
-->
    <?php wp_footer(); ?>
</body>
</html> 