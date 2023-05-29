import app from './config';

const getProducts = () => {
    try {
        const res = app.get('/api/v1/view/products')
        return res.data
    } catch (error) {
        console.error("GET Products Error: ", error);
        return error;
    }
}

const saveNewProduct = (payload) => {
    const res = app.post('/api/products', {
        ...payload, date_sold: null
    })
        .then(response => {
            console.log(response.data)
        })
        .catch(error => {
            console.log("Save Products Error: ", error)
        })
}

const loginUser = async (payload) => {
    // set submitting to true to disable button and show loader
    this.submitting = true

    try {
        // make login request
        const response = await this.$axios.post('/api/v1/login', {
            ...payload
        })

        // set token to storage
        this.$store.commit('setToken', response.data.access_token)

        // redirect to dashboard
        this.$router.push({ name: 'products' })
    } catch (error) {
        // handle error here
        console.error(error)
    } finally {
        // set submitting to false to enable button and hide loader
        this.submitting = false
    }
}

module.exports = {
    getProducts,
    saveNewProduct,
    loginUser
}