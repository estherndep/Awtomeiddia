<template>
    <nav>
        <div class="icon"
            v-bind:class= "{active: isActive}"
            v-on:click = "toggleActive">
            <div class="burger">
            </div>
        </div>
        <drawer></drawer>
    </nav>
</template> 

<script>
import SideDrawer from "./SideDrawer";

export default {
  components: {
    drawer: SideDrawer
  },
  data: function() {
    return {
      isActive: false,
      count: 0
    };
  },

  methods: {
    toggleActive: function() {
      this.isActive = !this.isActive;
      this.count += 1;
      if (this.count == 1) {
        drawer.toggleActive;
      }
    }
  },

  mounted() {
    console.log("Component mounted.");
  }
};
</script>