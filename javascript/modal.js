        const buyBtns = document.querySelectorAll('.js-buy-ticket')
        const modal =document.querySelector('.js-modal')
        const modalcontainer=document.querySelector('.js-modalcontainer')
        const modalclose=document.querySelector('.js-modal-close')
        // thêm class open vào modal hiển thị modal
        function showbuyticket(){
            modal.classList.add('open')
        }
        // ẩn class open vào modal ẩn modal

        function hidebuyticket(){
            modal.classList.remove('open')
        }
        // lặp lại từng button và nghe sự kiện click
        for(const buyBtn of buyBtns){
            buyBtn.addEventListener('click',showbuyticket)
        }
        // nghe hành vi đóng modal
        modalclose.addEventListener('click',hidebuyticket)
        modal.addEventListener('click',hidebuyticket)
        modalcontainer.addEventListener('click',function(event){
            event.stopPropagation()
        })