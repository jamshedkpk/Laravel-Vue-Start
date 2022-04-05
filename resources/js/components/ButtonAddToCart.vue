<template>
<div>
<Button class="btn btn-danger btn-sm btn-block" v-on:click.prevent="addProductToCart()">Add To Cart</Button>
</div>
</template>
<script>
export default
{
props:['productid','userid'],

data(){
return{
cart:
{
'userid':1,
'productid':2
}
}
},

methods:
{
async addProductToCart()
{
// Check if user login
if(this.userid==0)
{
this.$toast.error("Please Login Before You Add A Product To Cart",{
type:"error",
position:"top",
duration:"500"
});
}
else
{
// Store product to cart if user login
let response=await axios.post('/cart/store',
{
'productid':this.productid,
'userid':this.userid,
});
}
}
},

}
</script>