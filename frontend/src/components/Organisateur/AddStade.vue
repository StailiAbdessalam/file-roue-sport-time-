<template>
        <div class="flex h-screen bg-gray-200 items-center justify-center  mt-32 mb-32">
  <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
    <div class="flex justify-center py-4">
      <!-- <div class="flex bg-orange-200 rounded-full md:p-4 p-2 border-2 border-orange-300">
        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
      </div> -->
    </div>

    <div class="flex justify-center">
      <div class="flex">
        <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Add Your Stade</h1>
      </div>
    </div>

    <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Title</label>
      <input v-model="Stade.Title" class="py-2 px-3 rounded-lg border-2  mt-1 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-transparent" type="text" placeholder="Title" />
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Description</label>
        <input v-model="Stade.Description" class="py-2 px-3 rounded-lg border-2  mt-1 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-transparent" type="text" placeholder="Description" />
      </div>
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Number Personne</label>
        <input v-model="Stade.num_personne" class="py-2 px-3 rounded-lg border-2  mt-1 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-transparent" type="number" placeholder="Number Personne" />
      </div>
    </div>

    <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Stade de ..</label>
      <select v-model="Stade.Type" class="py-2 px-3 rounded-lg border-2  mt-1 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-transparent">
        <option>Football</option>
        <option>basketball</option>
        <option>auther</option>
      </select>
    </div>

    <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Prix (DH)</label>
      <input v-model="Stade.Prix" class="py-2 px-3 rounded-lg border-2  mt-1 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-transparent" type="number" placeholder="Prix" />
    </div>

    <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload Photo</label>
        <div class='flex items-center justify-center w-full'>
            <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-orange-300 group'>
                <div class='flex flex-col items-center justify-center pt-7'>
                  <svg class="w-10 h-10 text-orange-400 group-hover:text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  <p class='lowercase text-sm text-gray-400 group-hover:text-orange-600 pt-1 tracking-wider'>Select a photo</p>
                </div>
              <input type='file' @change="UploadImage" class="hidden" />
            </label>
        </div>
    </div>

    <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
      <button class='w-auto bg-orange-500 hover:bg-orange-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancel</button>
      <button @click="addStade" class='w-auto bg-green-500 hover:bg-green -700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Create</button>
    </div>

  </div>
</div>
</template>

<script>
export default {
  name: "Add-Stade",
  data() {
      return {
        Stade:{
          Title:'',
          Description:'',
          num_personne:'',
          Prix:'',
          Type:'',
          images:'',
        }
      }
  },
  methods: {
    addStade(){
    console.log(this.Stade);
      // this.$store.dispatch('addStade',this.Stade)
      // this.$router.push('/')
    },
    UploadImage(e){
      console.log(e.target.files[0]);
      this.Stade.images = e.target.files[0];
    }

  }
};
</script>

<style lang="scss" scoped></style>
