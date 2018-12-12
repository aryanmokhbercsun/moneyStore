import Products from '../../../api/products';
import _products from '../../mutation-types/products';

export default {
    setProducts({commit}, payload){
        Products.fetchGetAllProductsAPI(
            payload,
            success => {
                commit(_products.SET_PRODUCTS, success);
            },
            error => console.log("error: " + error)
        )
    }
}