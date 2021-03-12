<template>
    <div class="text-center">
        <a :href="this.route"
            :class="this.clase"
            class="p-3 mx-auto block transition duration-300 text-center rounded-md font-bold border border-gray-300 hover:text-white hover:bg-gray-800"
        >{{ this.buttonText }}</a>
    </div>
</template>
<script>
export default {
    props: ['route', 'buttonText', 'clase'],
}
</script>
