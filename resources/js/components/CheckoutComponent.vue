<template>

</template>

<script>
    export default {
        data() {
            return {
                carts: [],
                total : 0,
            }
        },
        mounted() {
            this.viewCart();
        },
        methods : {
            viewCart() {
                if(localStorage.getItem('carts')) {
                    this.carts = JSON.parse(localStorage.getItem('carts'))
                    this.total = this.carts.reduce((total, item)=>{
                        return total + item.amount * item.price;
                    }, 0);
                    localStorage.setItem('total', this.total)
                }
            }
        }
    }
</script>
