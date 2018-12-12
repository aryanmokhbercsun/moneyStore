const fetchGetAllProductsAPI = (payload, success, error) => {
    axios.get('api/getAllProducts')
    .then(
        response => success(response.data),
    ).catch(
        console.log(error)
        // failure=>{error(failure.response.data)}
    );
}

export default {
    fetchGetAllProductsAPI,

}