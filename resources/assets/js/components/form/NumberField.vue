<template>
    <field :name="name" :error="error">
        <label :for="name" class="control-label">{{ title }}</label>
        <el-input-number
            style="display: block"
            :id="name"
            :name="name"
            v-model="number"
            @change="updateValue"
            :min="0">
        </el-input-number>
    </field>
</template>

<script>
    import Field from './Field.vue';

    export default {
        name: 'NumberField',

        components: {
            Field,
        },

        props: ['name', 'title', 'value', 'error'],

        data() {
            return {
                number: this.value
            }
        },

        methods: {
            updateValue(value) {
                // sanitize, validate etc
                // if (Number.isInteger(Number(value))) {
                //     this.$emit('valid');
                // } else {
                //     this.$emit('invalid');
                // }

                this.$emit('input', value);
            },
            handleChange(value) {
                console.log(value)
            }
        }
    }
</script>