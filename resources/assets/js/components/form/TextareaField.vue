<template>
    <field :name="name" :error="error">
        <label :for="name" class="control-label">{{ title }}</label>
        <textarea
            :id="name"
            :name="name"
            class="form-control"
            @input="updateValue($event.target.value)"
        >{{value}}</textarea>
    </field>
</template>

<script>
    import Field from './Field.vue';

    export default {
        name: 'TextField',

        components: {
            Field,
        },

        props: ['name', 'title', 'value', 'error'],

        methods: {
            updateValue(value) {
                // sanitize, validate etc
                if (value) {
                    this.$emit('valid');
                }

                this.$emit('input', value);
            }
        }
    }
</script>