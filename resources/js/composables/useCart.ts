import { router } from '@inertiajs/vue3';
import { toast } from 'vue3-toastify';
export const addToCart = (product) => {
    router.post('/cart', {
        furniture_id: product.id,
    }, {
        preserveScroll: true,
        onSuccess: () => toast.success(`${product.name} added to cart`, {
            theme: 'colored',
            position: 'bottom-right',
            icon: '🛒',
        }),
        onError: (errors) => {
            toast.error('The product could not be added to the cart. Maybe you have already added it?', {
                theme: 'colored',
                position: 'bottom-right',
            })
            console.log('server error', errors)
        }
    })
}
