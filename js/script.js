document.addEventListener('DOMContentLoaded', function () {
    const addItemButton = document.getElementById('addItemButton');
    const addItemModal = document.getElementById('addItemModal');
    const closeModal = document.querySelector('.close');
    const itemForm = document.getElementById('itemForm');
    const itemList = document.getElementById('itemList');

    // Open modal
    addItemButton.addEventListener('click', function () {
        addItemModal.style.display = 'flex';
    });

    // Logout confirmation
    document.querySelector('.logout-btn').addEventListener('click', function (e) {
        if (!confirm('Are you sure you want to logout?')) {
            e.preventDefault(); // Stop the link from navigating
        }
    });

    // Close modal
    closeModal.addEventListener('click', function () {
        addItemModal.style.display = 'none';
    });

    // Handle form submission
    itemForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const itemName = document.getElementById('itemName').value.trim();

        // Check if the item already exists
        let itemExists = false;
        const items = itemList.querySelectorAll('.item span');
        items.forEach(item => {
            if (item.textContent === itemName) {
                itemExists = true;
            }
        });

        if (itemExists) {
            alert('This item already exists in the list!');
            return;
        }

        // Send AJAX request to submit_item.php
        fetch('submit_item.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `itemName=${encodeURIComponent(itemName)}`,
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                // Add the new item to the list
                const newItem = document.createElement('div');
                newItem.classList.add('item');
                newItem.setAttribute('data-id', data.itemId);
                newItem.innerHTML = `
                    <span>${data.itemName}</span>
                    <button class='delete-btn' data-id='${data.itemId}'>Delete</button>
                `;
                itemList.appendChild(newItem);

                // Clear the form and hide the modal
                itemForm.reset();
                addItemModal.style.display = 'none';
            } else {
                alert('Failed to add item: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });

    // Handle item deletion
    itemList.addEventListener('click', function (e) {
        if (e.target.classList.contains('delete-btn')) {
            const itemId = e.target.getAttribute('data-id');
            if (confirm('Are you sure you want to delete this item?')) {
                // Send AJAX request to delete_item.php
                fetch('delete_item.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `itemId=${encodeURIComponent(itemId)}`,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Remove the item from the list
                        e.target.closest('.item').remove();
                    } else {
                        alert('Failed to delete item: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        }
    });
});