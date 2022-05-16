<template>
  <div class="flex justify-center items-center">
    <div
      class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2 mt-16"
    >
      <div class="flex justify-center py-4">
        <div
          class="flex bg-green-200 rounded-full md:p-4 p-2 border-2 border-green-300"
        >
          <svg
            class="w-8 h-8 text-white"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"
            ></path>
          </svg>
        </div>
      </div>
      <form action="">
        <div class="flex justify-center">
          <div class="flex">
            <h1 class="text-gray-600 font-bold md:text-2xl text-xl">SPORT Time</h1>
          </div>
        </div>

        <div class="grid grid-cols-1 mt-5 mx-7">
          <label
            class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
            >Title</label
          >
          <input
            class="py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"
            type="text"
            placeholder="Title"
          />
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
          <div class="grid grid-cols-1">
            <label
              class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
              >Descrition</label
            >
            <input
              class="py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"
              type="text"
              placeholder="Descrition"
            />
          </div>
          <div class="grid grid-cols-1 mt-5 mx-7">
            <label
              class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
              >Game</label
            >
            <select 
              class="py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"
            >
              <option>FootBall</option>
              <option>BascketBall</option>
              <option>Auther</option>
            </select>
          </div>

          <div  class="grid grid-cols-1">
            <label
              class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
              >text hover</label
            >
            <input
              class="py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"
              type="text"
              placeholder="text hover"
            />
          </div>
        </div>

        <!-- <div class="grid grid-cols-1 mt-5 mx-7">
          <label
            class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
            >Another Input</label
          >
          <input
            class="py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"
            type="text"
            placeholder="Another Input"
          />
        </div> -->

        <div class="grid grid-cols-1 mt-5 mx-7">
          <label
            class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1"
            >Upload Photo</label
          >
          <div class="flex items-center justify-center w-full">
            <label
              class="flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-green-300 group"
            >
              <div class="flex flex-col items-center justify-center pt-7">
                <svg
                  class="w-10 h-10 text-green-400 group-hover:text-green-600"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                  ></path>
                </svg>
                <p
                  class="lowercase text-sm text-gray-400 group-hover:text-green-600 pt-1 tracking-wider"
                >
                  Select a photo
                </p>
              </div>
              <input type="file" class="hidden" />
            </label>
          </div>
        </div>

        <div class="flex items-center justify-center md:gap-8 gap-4 pt-5 pb-5">
        
          <button
            class="w-4/5 bg-green-500 hover:bg-green-700 rounded-lg shadow-xl font-medium text-white px-4 py-2"
          >
            Create
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: "Add-Post",
  data() {
      return {
        
      }
  },
};
</script>

<style lang="scss" scoped></style>
