<template>
    <default-field :field="field" :errors="errors" :full-width-content="true">
        <template slot="field">
            <div  class="flex items-start">
                <textarea
                        class="w-full form-control form-input form-input-bordered py-3 h-auto flex-1"
                        :id="field.attribute"
                        :dusk="field.attribute"
                        v-model="value"
                        v-bind="extraAttributes"
                ></textarea>
                <span v-if="field.min" :class="'flex text-xs rounded bg-' + buttonColor + ' uppercase p-2 m-3'">
                    <span v-if="field.counter">{{ this.value.length }} / {{ this.field.min }}</span>
                </span>
            </div>
        </template>
    </default-field>
</template>

<script>
    import {FormField, HandlesValidationErrors} from 'laravel-nova'

    export default {
        mixins: [HandlesValidationErrors, FormField],
        data () {
            return {
                errorUntil: 0.8
            }
        },
        mounted() {
            this.errorUntil = this.field.errorUntil / 100
        },
        computed: {
            buttonColor() {
                if (this.value.length >= this.field.min) {
                    return 'success'
                }
                if ((this.value.length / this.field.min) < this.errorUntil) {
                    return 'danger'
                }
                return 'warning'
            },
            extraAttributes() {
                const attrs = this.field.extraAttributes

                return {
                    // Leave the default attributes even though we can now specify
                    // whatever attributes we like because the old number field still
                    // uses the old field attributes
                    ...this.defaultAttributes,
                    ...attrs,
                }
            },
        },
    }
</script>
