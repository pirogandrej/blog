export default {
    state: {
        allposts: [],
        post: ''
    },
    getters: {
        allposts(state){
            return state.allposts
        },
        singlepost(state){
            return state.post
        }
    },
    mutations: {
        allposts (state, payload){
            state.allposts = payload
        },
        addpost (state, payload){
            state.allposts.push(payload)
        },
        singlepost (state, payload){
            state.post = payload
        },
        deletepost (state, payload){
            state.allposts.splice(payload, 1);
        }
    },
    actions: {}
}