 <!-- Message registration successfully  -->
    <div class="book-service-success align-items-center justify-content-center" id="book-service-success">
        <div class="modal-message">
            <div class="message-load">
                <svg width="300" height="300">
                    <circle cx="150" cy="150" r="100" stroke="darkblue" stroke-width="5" fill="none" />
                    <text class="messageContent" x="150" y="145" font-size="1.3rem" text-anchor="middle" fill="darkblue">Registration</text>
                    <text class="messageContent" x="150" y="180" font-size="1.3rem" text-anchor="middle" fill="darkblue">Successfully</text>
                </svg>
            </div>
            <div class="messageContent">Thanks for Choosing 😊</div>
        </div>
    </div>

<script>
        var bookMessage = document.getElementById('book-service-success');

    function closeModal() {
        bookMessage.style.display= 'none';
    }

    function showModal(){
        bookMessage.style.display="flex";

        const message = document.querySelectorAll('.messageContent');
            message.forEach(item =>{
                item.style.display='none';
        });

        // Load message register services 
        setTimeout(()=>{
            message.forEach(item =>{
                item.style.display='block';
            })
        },500);
            // Close load message register services 
       setTimeout(()=>{;
            bookMessage.style.display="none";
            message.forEach(item =>{
                item.style.display='none';
            });
            closeModal();
            if (window.location.search.includes('success=1')) {
                const url = new URL(window.location);
                url.searchParams.delete('success');
                window.history.replaceState({}, document.title, url.pathname);
            }
        },3000);
    };

    
    <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
        // Hiển thị modal nếu có parameter success
        showModal();
    <?php endif; ?>
</script>