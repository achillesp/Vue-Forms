<template>
    <field :name="name" :error="error">
        <label :for="name" class="control-label">{{ title }}</label>
        <select :id="name" :name="name" class="form-control" @input="updateValue($event.target.value)">
            <option value="">Pick one...</option>
            <option
                v-for="(option, id) in options"
                :value="id"
                v-text="option"
                :selected="id == value"
            ></option>
        </select>
    </field>
</template>

<script>
    import Field from './Field.vue';

    export default {
        name: 'SelectField',

        components: {
            Field,
        },

        props: ['name', 'title', 'value', 'options', 'error'],

        methods: {
            updateValue(value) {
                // sanitize, validate etc

                this.$emit('input', value);
            }
        }
    }
</script>