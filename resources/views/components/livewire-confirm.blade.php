<script>
    async function livewireConfirm(title, phpCallback, text, btnText) {

        swal.fire({
            title: (title || 'Are you sure?'),
            text: (text || null),
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: (btnText || 'Proceed')
        }).then((result) => {
            if (result.isConfirmed) {
                @this.call(phpCallback);
            }
        })
    }

</script>