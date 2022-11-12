<template>
    <div>
        <h2>Информация о Санте</h2>
        <div class="col-12">
            <div class="row col-2">
                <label class="form-label">UserId:</label><br>
                <input class="form-control col-2 mb-2 f-input" type='text' name="user_id" v-model='user_id' />
            </div>
            <div class="row col-2 mb-10">
                <button class="btn btn-primary" @click='showUserInfo'>Показать</button>
            </div>
        </div>
        <div>
            <pre>
{{ json_out }}
            </pre>
        </div>
    </div>
</template>

<script>
    export default {
        name: "SantaForm",
        data: () => ({
            user_id: null,
            json_out: 'Введите ID сотрудника'
        }),
        methods: {
            showUserInfo() {
                if (this.user_id){
                    axios.get('/api/users/'+this.user_id)
                        .then(res => {
                            this.json_out = res.data;
                            return res.data;
                        })
                }
                else {
                    return null;
                }
            }
        },
    }
</script>
<style scoped>
    pre{
        padding: 5px;
        margin: 10px;
        background-color: #1a202c;
        color: white;
    }
    label{
        font-weight: bold;
    }
    .f-input{
        width: 10%;
    }
</style>
