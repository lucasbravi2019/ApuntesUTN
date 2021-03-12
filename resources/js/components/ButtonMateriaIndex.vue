<template>
    <div class="grid grid-cols-2 min-w-min mx-auto col-span-2 text-center gap-3 p-3">
        <a :href="this.route"
            class="border border-gray-300 p-3 hover:bg-gray-700 hover:text-white transition duration-300 rounded-lg font-bold"
        >{{ this.materia }}</a>
        <p class="font-bold block max-w-max p-3 my-auto ">{{ this.year }}° Año</p>
    </div>
</template>
<script>
export default {
    props: ['route', 'materia', 'year']
}
</script>
