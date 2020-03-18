<template>
<div class="vx-col w-full mb-base p-3">
			<vx-card >
                <div class="w-3/4">
                    <form>
                        <div class="vx-row mb-6">
                            <div class="vx-col sm:w-1/3 w-full">
                                <span>Name</span>
                            </div>
                            <div class="vx-col sm:w-2/3 w-full">
                                <vs-input class="w-full" v-model="name" />
                            </div>
                        </div>
                        <div class="vx-row mb-6">
                            <div class="vx-col sm:w-1/3 w-full">
                                <span>Slug</span>
                            </div>
                            <div class="vx-col sm:w-2/3 w-full">
                                <vs-input type="text" class="w-full" v-model="slug" />
                            </div>
                        </div>
                        <div class="vx-row mb-6">
                            <div class="vx-col sm:w-1/3 w-full">
                                <span>Short Description</span>
                            </div>
                            <div class="vx-col sm:w-2/3 w-full">
                                <vs-textarea counter="20" class="w-full" v-model="short_info" />
                            </div>
                        </div>
                        <div class="vx-row mb-6">
                            <div class="vx-col sm:w-1/3 w-full">
                                <span>Description</span>
                            </div>
                            <div class="vx-col sm:w-2/3 w-full">
                                <vs-textarea counter="20" class="w-full" v-model="info" />
                            </div>
                        </div>
                        <div class="vx-row">
                            <div class="vx-col sm:w-2/3 w-full ml-auto">
                                <vs-button class="mr-3 mb-2">Submit</vs-button>
                            </div>
                        </div>
                    </form>
                </div>
			</vx-card>
</div>

	
    
</template>
<script>
export default {
    data(){
        return {
            name: '',
            slug: '',
            logo:'',
            short_info: '',
            info: ''
        }
    }
}
</script>