<style scoped>
</style>

<template>
    <div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Картинка</th>
                    <th>Название</th>
                    <th>Категория</th>
                    <th>Теги</th>
                    <th>Статус</th>
                    <th>Избранный</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(post, index) in posts">
                    <td>
                        {{ post.id }}
                    </td>
                    <td>
                        <img :src="post.image" alt="" width="100">
                    </td>
                    <td>{{ post.title }}</td>
                    <td>{{ post.CategoryTitle }}</td>
                    <td>{{ post.tagsTitles }}</td>
                    <td>
                        {{ post.id}}
                        <!--<router-link :to="{name: 'single-contact', params: {id: contact.id}}" class="btn btn-primary">Show</router-link>-->
                        <!--<router-link :to="{name: 'edit-contact', params: {id: contact.id}}" class="btn btn-info">Edit</router-link>-->
                        <!--<button class="btn btn-danger" @click="deletecontact(contact.id,index)">Delete</button>-->
                    </td>
                    <td>
                        {{ post.id}}
                    </td>
                    <td>
                        <!--{{ post.id}}-->
                        <button class="button-delete" @click="deletepost(post.id,index)">
                            <i class="fa fa-remove"></i>
                        </button>

                        <!--{{&#45;&#45;{!! Form::open(['route' => ['posts.destroy', $post->id], 'method'=>'delete']) !!}&#45;&#45;}}-->
                        <!--{{&#45;&#45;<button onclick="return confirm('Вы уверены?')" type="submit" class="button-delete">&#45;&#45;}}-->
                        <!--{{&#45;&#45;<i class="fa fa-remove"></i>&#45;&#45;}}-->
                        <!--{{&#45;&#45;</button>&#45;&#45;}}-->
                        <!--{{&#45;&#45;{!! Form::close() !!}&#45;&#45;}}-->

                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
    export default {
        props: [
            'posts',
        ],
        mounted() {
            console.log(this.posts);
        },
        created(){
            this.$store.commit('allposts', this.posts);
//            axios.get('contacts')
//                .then(response => {
//                    this.$store.commit('allcontacts', response.data);
//                })
        },
        computed: {
            allposts(){
                return this.$store.getters.allposts
            }
        },
        methods: {
            deletepost(id, index){
                if(confirm('Удалить пост ?')){
                    axios.delete('posts/' + id)
                        .then(response => {
                            console.log('response');
                            this.$store.commit('deletepost', index);
                        })
                }
            }
        }
    }
</script>

