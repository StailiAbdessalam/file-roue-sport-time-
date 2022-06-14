<template>
  <div class="w-full h-screen flex justify-center items-start overflow-scroll">
    <div class="w-full p-4 mt-20">
      <table class="w-full border">
        <thead>
          <tr class="bg-orange-50 border-b">
            <th
              class="p-2 border-r cursor-pointer text-sm font-bold text-gray-500"
            >
              <div class="flex items-center justify-center">
                Name
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 w-4"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M8 9l4-4 4 4m0 6l-4 4-4-4"
                  />
                </svg>
              </div>
            </th>
            <th
              class="p-2 border-r cursor-pointer text-sm font-bold text-gray-500"
            >
              <div class="flex items-center justify-center">
                Email
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 w-4"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M8 9l4-4 4 4m0 6l-4 4-4-4"
                  />
                </svg>
              </div>
            </th>
            <th
              class="p-2 border-r cursor-pointer text-sm font-bold text-gray-500"
            >
              <div class="flex items-center justify-center">
                Address
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 w-4"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M8 9l4-4 4 4m0 6l-4 4-4-4"
                  />
                </svg>
              </div>
            </th>
            <th
              class="p-2 border-r cursor-pointer text-sm font-bold text-gray-500"
            >
              <div class="flex items-center justify-center">
                Action
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 w-4"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M8 9l4-4 4 4m0 6l-4 4-4-4"
                  />
                </svg>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          <!-- <tr
            v-for="Org in information"
            :key="Org"
            class="bg-gray-100 text-center border-b text-sm text-gray-600"
          >
            <td class="p-2 border-r">{{ Org["FirstName"] }}</td>
            <td class="p-2 border-r">{{ Org["Email"] }}</td>
            <td class="p-2 border-r">{{ Org["Address"] }}</td>
            <td class="p-4 flex gap-4 justify-center items-center">
              <a
                @click="ValideDemande(Org)"
                href="#"
                class="bg-blue-500 p-2 text-white hover:shadow-lg font-normal w-32"
                >Valider</a
              >
              <a
                href="#"
                class="bg-red-500 p-2 text-white hover:shadow-lg font-normal w-32"
                @click="AnnulerDemande(Org)"
                >Supprimer</a
              >
              <div class="modal">
                <button
                  id="modal__trigger"
                  for="modal__trigger"
                  @click="infoDetails = Org"
                >
                  Details
                </button>
                <div
                  v-if="infoDetails"
                  class="modal__overlay"
                  role="dialog"
                  aria-labelledby="modal__title"
                  aria-describedby="modal_desc"
                >
                  <div class="modal__wrap">
                    <label @click="infoDetails = ''" for="modal__trigger"
                      >&#10006;</label
                    >
                    <h2 id="modal__title"></h2>
                    <h2 id="modal__title">{{ infoDetails["FirstName"] }}</h2>
                    <h2 id="modal__title">{{ infoDetails["LastName"] }}</h2>
                    <h2 id="modal__title">
                      {{ infoDetails["business_name"] }}
                    </h2>
                    <h2 id="modal__title">{{ infoDetails["Email"] }}</h2>
                    <h2 id="modal__title">{{ infoDetails["Phone"] }}</h2>
                    <h2 id="modal__title">{{ infoDetails["Address"] }}</h2>
                    <h2 id="modal__title">{{ infoDetails["NumSTadieum"] }}</h2>
                    <h2 id="modal__title">{{ infoDetails["Ville"] }}</h2>
                    <h2 id="modal__title">{{ infoDetails["Jour"] }}</h2>
                    <h2 id="modal__title">
                      {{ infoDetails["business_name"] }}
                    </h2>
                    <h2 id="modal__title">{{ infoDetails["id"] }}</h2>
                  </div>
                </div>
              </div>
            </td>
          </tr> -->
        </tbody>
      </table>
      <!-- <div
        v-if="information[0] == null"
        class="bg-teal-lightest border-t-4 border-teal rounded-b text-teal-darkest px-4 py-3 shadow-md my-2"
        role="alert"
      >
        <div class="flex">
          <svg
            class="h-6 w-6 text-teal mr-4"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"
            />
          </svg>
          <div>
            <p class="font-bold">All Demandes</p>
            <p class="text-sm">d'abord tu n'es pas un Demande</p>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</template>

<script>
    export default {
        name: "myrese-rvations",
    }
</script>

<style lang="scss" scoped>

</style>