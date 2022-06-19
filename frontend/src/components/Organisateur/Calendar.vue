<template>
  <div class="px-[3%]">
    <h2 class="text-lg font-semibold text-gray-900">
      les utilisateurs qui reserver
    </h2>
    <div class="lg:grid lg:grid-cols-12 lg:gap-x-16">
      <div
        class="mt-10 text-center lg:col-start-8 lg:col-end-13 lg:row-start-1 lg:mt-9 xl:col-start-9"
      >
        <div class="flex items-center text-gray-900">
          <button
            type="button"
            @click="previousMonth"
            class="-m-1.5 flex flex-none items-center justify-center p-1.5 text-gray-400 hover:text-gray-500"
          >
            <span class="sr-only">Previous month</span>
            <ChevronLeftIcon class="h-5 w-5" size="1.5x" />
          </button>
          <div class="flex-auto font-semibold">{{ formattedToday }}</div>
          <button
            type="button"
            @click="nextMonth"
            class="-m-1.5 flex flex-none items-center justify-center p-1.5 text-gray-400 hover:text-gray-500"
          >
            <span class="sr-only">Next month</span>
            <ChevronRightIcon class="h-5 w-5" size="1.5x" />
          </button>
        </div>
        <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
          <div>M</div>
          <div>T</div>
          <div>W</div>
          <div>T</div>
          <div>F</div>
          <div>S</div>
          <div>S</div>
        </div>
        <div
          class="isolate mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm shadow ring-1 ring-gray-200"
        >
          <button
            v-for="(day, dayIdx) in days"
            @click="setSelectedDay(day)"
            :key="day"
            type="button"
            :class="[
              'py-1.5 hover:bg-gray-100 focus:z-10',
              isThisMonth(day) ? 'bg-white' : 'bg-gray-50',
              (isSameDay(selectedDay, day) || isToday(day)) && 'font-semibold',
              isSameDay(selectedDay, day) && 'text-orange-500',
              !isSameDay(selectedDay, day) &&
                isThisMonth(day) &&
                !isToday(day) &&
                'text-gray-900',
              !isSameDay(selectedDay, day) &&
                !isThisMonth(day) &&
                !isToday(day) &&
                'text-gray-400',
              isToday(day) && !isSameDay(selectedDay, day) && 'text-orange-600',
              dayIdx === 0 && 'rounded-tl-lg',
              dayIdx === 6 && 'rounded-tr-lg',
              dayIdx === days.length - 7 && 'rounded-bl-lg',
              dayIdx === days.length - 1 && 'rounded-br-lg',
            ]"
          >
            <time
              :datetime="day"
              :class="[
                'mx-auto flex h-7 w-7 items-center justify-center rounded-full',
                isSameDay(selectedDay, day) && isToday(day) && 'bg-white',
                isSameDay(selectedDay, day) && !isToday(day) && 'bg-green-700',
              ]"
              >{{ format(day, "d") }}
            </time>
          </button>
        </div>
        <button
          type="button"
          @click="gohome()"
          class="mt-8 w-full rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white shadow hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
        >
           
                Go Home
           
        </button>
      </div>
      <ol
        class="mt-4 divide-y divide-black text-sm leading-6 lg:col-span-7 xl:col-span-8 gap-4"
      >
       
        <li
          v-for="meeting in meetings"
          :key="meeting.id"
          class="relative flex space-x-6 py-6 xl:static bg-slate-100 px-5 rounded-md border-b "
        >
          <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKAyHUwfu-mtzTdTBMpWWBCWbk7YEBTx2GOw&usqp=CAU"
            alt=""
            class="h-14 w-14 flex-none rounded-full"
          />
          <div class="flex-auto">
            <h3 class="pr-10 font-semibold text-gray-900 xl:pr-0">
             Client
            </h3>
            <dl class="mt-2 flex flex-col text-gray-500 xl:flex-row">
              <div class="flex items-start space-x-3">
                <dt class="mt-0.5">
                  <span class="sr-only">Date</span>
                  <CalendarIcon class="h-5 w-5 text-gray-400" size="1.5x" />
                </dt>
                <dd>
                  <time 
                    >{{ meeting.Date }} at {{ meeting.Time }}
                  </time>
                </dd>
              </div>
              <div
                class="mt-2 flex items-start space-x-3 xl:mt-0 xl:ml-3.5 xl:border-l  xl:border-opacity-50 xl:pl-3.5"
              >
                <dt class="mt-0.5">
                  <span class="sr-only">Location</span>
                  <LocationMarkerIcon
                    class="h-5 w-5 text-gray-400"
                    size="1.5x"
                  />
                </dt>
                <dd>{{ user.Address }}</dd>
              </div>
            </dl>
                
          </div>


          <Menu
            as="div"
            class="absolute top-6 right-0 xl:relative xl:top-auto xl:right-auto xl:self-center"
          >
            <div>
              <MenuButton
                class="-m-2 flex items-center rounded-full p-2 text-gray-500 hover:text-gray-600"
              >
                <span class="sr-only">Open options</span>
                <!-- <DotsHorizontalIcon class="h-5 w-5" size="1.5x" /> -->
              </MenuButton>
            </div>

            <transition
              enter-active-class="transition ease-out duration-100"
              enter-from-class="transform opacity-0 scale-95"
              enter-to-class="transform opacity-100 scale-100"
              leave-active-class="transition ease-in duration-75"
              leave-from-class="transform opacity-100 scale-100"
              leave-to-class="transform opacity-0 scale-95"
            >
              <MenuItems
                class="absolute right-0 z-10 mt-2 w-36 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
              >
                <div class="py-1">
                  <MenuItem v-slot="{ active }">
                    <a
                      href="#"
                      :class="[
                        active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                        'block px-4 py-2 text-sm',
                      ]"
                      >Edit</a
                    >
                  </MenuItem>
                  <MenuItem v-slot="{ active }">
                    <a
                      href="#"
                      :class="[
                        active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                        'block px-4 py-2 text-sm',
                      ]"
                      >Cancel</a
                    >
                  </MenuItem>
                </div>
              </MenuItems>
            </transition>
          </Menu>
        </li>
      </ol>
    </div>
  </div>
</template>

<script setup>
import {
  add,
  eachDayOfInterval,
  endOfMonth,
  format,
  isThisMonth,
  isSameDay,
  isToday,
  parse,
  startOfToday,
} from "date-fns";
import { computed, ref } from "vue";
import { Menu, MenuButton, MenuItem, MenuItems } from "@headlessui/vue";
import { onMounted } from "vue";
import { useStore } from "vuex";
import {
  CalendarIcon,
  ChevronLeftIcon,
  ChevronRightIcon,
  LocationMarkerIcon,
} from "@heroicons/vue/solid";
import axios from "axios";
import { useRouter } from 'vue-router'
let meetings =ref([]);
const today = startOfToday();
const selectedDay = ref(today);
const currentMonth = ref(format(today, "MMM-yyyy"));
let firstDayCurrentMonth = computed(() =>
  parse(currentMonth.value, "MMM-yyyy", new Date())
);
let days = computed(() =>
  eachDayOfInterval({
    start: firstDayCurrentMonth.value,
    end: endOfMonth(firstDayCurrentMonth.value),
  })
);
onMounted(() => {
  getOrganisateur();
});
const store = useStore();
const router = useRouter()
function gohome() {
  router.push("/")
}
const getOrganisateur = () => {
  store.dispatch("getOrganisateur");
};
let user = computed(() => {
  return store.getters.User;
});
function previousMonth() {
  let firstDayNextMonth = add(firstDayCurrentMonth.value, { months: -1 });
  currentMonth.value = format(firstDayNextMonth, "MMM-yyyy");
}
function nextMonth() {
  let firstDayNextMonth = add(firstDayCurrentMonth.value, { months: 1 });
  currentMonth.value = format(firstDayNextMonth, "MMM-yyyy");
}
function setSelectedDay(day) {
  selectedDay.value = day;
  const date = format(day, "yyyy-MM-dd");
  axios
    .post("https://sportime.bouchikhi.com/stade/getallReservation", {
      date: date,
      id: user.value.id,
    })
    .then((response) => {
    meetings.value = response.data;
    });
}
const formattedToday = computed(() =>
  format(firstDayCurrentMonth.value, "MMMM yyyy")
);
</script>

<script>
export default {
  name: "Cale-ndar",
};
</script>
