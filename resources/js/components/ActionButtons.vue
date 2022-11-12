<template>
    <div class="action-buttons">
        <button class="btn btn-outline-dark" @click="handleAction('delete')">
            <i class="fa fa-trash"></i>
        </button>
    </div>
</template>

<script>
    export default {
        name: "ActionButtons",
        props: {
            data: {
                type: Object,
                required: true,
            },

        },
        data: () => ({
            user_data: []
        }),
        methods: {
            handleAction(actionName) {
                axios.delete('/api/users/'+this.data.id)
                    .then(res => {
                        console.log(res);
                        window.location.reload();
                    })
            }
        },

    }
</script>

<style scoped>

</style>
