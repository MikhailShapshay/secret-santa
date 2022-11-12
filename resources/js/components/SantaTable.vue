<template>
    <data-table v-bind="parametersTableAct" @click="handleAction('delete')"/>
</template>

<script>
    import axios from 'axios';
    import ActionButtons from '../components/ActionButtons';
    export default {
        name: "SantaTable",
        components:{
            ActionButtons
        },
        data: () => ({
            tbl_data: []
        }),
        computed: {
            parametersTableAct() {
                return {
                    data: this.tbl_data,
                    columns: [
                        { key: "id",
                          title: "UserId"
                        },
                        {
                            key: "name",
                            title: "Name"
                        },
                        {
                            key: "order_id",
                            title: "OrderId"
                        },
                        {
                            key: "item_id",
                            title: "ItemId"
                        },
                        {
                            key: "item_name",
                            title: "Item Name"
                        },
                        {
                            key: "created_at",
                            title: "Created Date"
                        },                        {
                            title: "Delete User",
                            component: ActionButtons
                        }
                    ],
                };
            }
        },
        mounted(){
          this.loadOrders()
        },
        methods: {
            loadOrders(){
                axios.get('/api/orders')
                .then(res => {
                    this.tbl_data = res.data;
                })
            },
            handleAction(actionName) {
                this.loadOrders();
            }
        }
    }
</script>


