// import _global from '../../../api/products';
import _products from '../../mutation-types/products';
export default {
    [_products.SET_PRODUCTS](state, payload){
        state.payload = [],
        payload.forEach(product => {
            state.products.push(product);
        })
    }
}