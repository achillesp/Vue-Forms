<template>
    <field :name="name" :error="error">
        <label :for="name" class="control-label">{{ title }}</label>
        <el-date-picker
            style="display: block"
            v-model="dateValue"
            type="date"
            placeholder="Pick a day"
            format="MM-dd-yyyy"
            :id="name"
            :name="name"
            @change="updateValue"
            ref="mydatepicker"
          >
        </el-date-picker>
    </field>
</template>

<script>
    import Field from './Field.vue';

    export default {
        name: 'DateField',

        components: {
            Field,
        },

        data() {
            return {
                dateValue: this.value
            }
        },

        props: ['name', 'title', 'value', 'error'],

        methods: {
            updateValue(value) {
                // sanitize, validate etc

                this.$emit('valid');

                this.$emit('input', value);
            }
        }
    }
</script>