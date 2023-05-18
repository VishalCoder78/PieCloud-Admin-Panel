<template>
    <div class="bg-white py-8 pl-20">
        <h2 class="text-4xl font-bold">PieCloud</h2>
        <p>Status: 100% [All operation]</p>
    </div>
    <div class="bg-white w-[70rem] mx-auto mt-10 p-4 rounded-md">
        <div class="flex ">
            <div class="button font-semibold text-gray-400 mx-4 py-2 px-4  rounded-md"
                :class="{ active: activeButton === 'stats' }" @click="toggleButton('stats')">Stats</div>
            <div class="button font-semibold text-gray-400 mx-4 py-2 px-4  rounded-md"
                :class="{ active: activeButton === 'tasks' }" @click="toggleButton('tasks')">Tasks</div>
            <div class="button font-semibold text-gray-400 mx-4 py-2 px-4  rounded-md"
                :class="{ active: activeButton === 'support' }" @click="toggleButton('support')">Support</div>
            <div class="button font-semibold text-gray-400 mx-4 py-2 px-4  rounded-md"
                :class="{ active: activeButton === 'status' }" @click="toggleButton('status')">Status</div>
        </div>
    </div>
    <div v-if="activeButton === 'stats'">
        <div class="w-[65rem] mx-auto mt-10 flex">
            <div class="w-max h-max p-4 mx-2 bg-white">
                <div class="flex justify-between pt-2 px-4">
                    <div>
                        <p class="text-4xl font-bold">123</p>
                        <p>Users</p>
                    </div>
                    <div class="mt-2">
                        <svg class=" h-6 w-6" fill="#000000" height="200px" width="200px" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 32.055 32.055" xml:space="preserve" transform="rotate(90)">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path
                                        d="M3.968,12.061C1.775,12.061,0,13.835,0,16.027c0,2.192,1.773,3.967,3.968,3.967c2.189,0,3.966-1.772,3.966-3.967 C7.934,13.835,6.157,12.061,3.968,12.061z M16.233,12.061c-2.188,0-3.968,1.773-3.968,3.965c0,2.192,1.778,3.967,3.968,3.967 s3.97-1.772,3.97-3.967C20.201,13.835,18.423,12.061,16.233,12.061z M28.09,12.061c-2.192,0-3.969,1.774-3.969,3.967 c0,2.19,1.774,3.965,3.969,3.965c2.188,0,3.965-1.772,3.965-3.965S30.278,12.061,28.09,12.061z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div>
                    <img src="/img/user.png" alt="">
                </div>
            </div>

            <div class="w-max h-max p-4 mx-2 bg-white">
                <div class="flex justify-between pt-2 px-4">
                    <div>
                        <p class="text-4xl font-bold">2000</p>
                        <p>Users</p>
                    </div>
                    <div class="mt-2">
                        <svg class=" h-6 w-6" fill="#000000" height="200px" width="200px" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 32.055 32.055" xml:space="preserve" transform="rotate(90)">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path
                                        d="M3.968,12.061C1.775,12.061,0,13.835,0,16.027c0,2.192,1.773,3.967,3.968,3.967c2.189,0,3.966-1.772,3.966-3.967 C7.934,13.835,6.157,12.061,3.968,12.061z M16.233,12.061c-2.188,0-3.968,1.773-3.968,3.965c0,2.192,1.778,3.967,3.968,3.967 s3.97-1.772,3.97-3.967C20.201,13.835,18.423,12.061,16.233,12.061z M28.09,12.061c-2.192,0-3.969,1.774-3.969,3.967 c0,2.19,1.774,3.965,3.969,3.965c2.188,0,3.965-1.772,3.965-3.965S30.278,12.061,28.09,12.061z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div>
                    <img src="/img/user.png" alt="">
                </div>
            </div>
            <!-- <img src="/img/user.png" alt=""> -->
        </div>
    </div>
    <div v-if="activeButton === 'tasks'">
        <div class="w-[65rem] mx-auto mt-10 flex">
            Tasks
        </div>
    </div>
    <div v-if="activeButton === 'support'">
        <div class="w-[65rem] mx-auto mt-10 flex">
            Support
        </div>
    </div>
    <div v-if="activeButton === 'status'">
        <div class="w-[65rem] mx-auto mt-10 flex">
            Status
        </div>
    </div>


    <div class="h-10"></div>
</template>


<script>
export default {
    data() {
        return {
            activeButton: 'stats',
            statsData: 'Stats data goes here',
            tasksData: 'tasks data goes here',
            supportData: 'support data goes here',
            statusData: 'status data goes here',
        };
    },
    methods: {
        toggleButton(button) {
            this.activeButton = button;
        },
    },
};
</script>

<style scoped>
.button {
    display: inline-block;
    padding: 10px 20px;
    cursor: pointer;
}

.button.active {
    background-color: rgb(37 99 235);
    color: #fff;
}

.data {
    margin-top: 20px;
}
</style>