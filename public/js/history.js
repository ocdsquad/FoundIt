document.addEventListener("DOMContentLoaded", () => {

    // Code Viewport
    const viewportWidth = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);

    const container_history = document.getElementById("container-history");
    const lost_barang_history = document.getElementById("lost-barang-history");
    const found_barang_history = document.getElementById("found-barang-history");
    
    if(viewportWidth < 1024){

        // Logic Switch Post (Mobile - Desktop)
        const lost_post = document.getElementById("lost-post");
        const found_post = document.getElementById("found-post");
        const switcher_post = document.getElementById("switcher-post");

        // Event Listener Switch (Mobile - Tablet)
        lost_post.addEventListener("click", () => {
            switch_lost_animation()
            changePostAnimation()
        });
        
        found_post.addEventListener("click", () => {
            switch_found_animation()
            changePostAnimation()
        });

        function switch_found_animation(){
            lost_post.classList.add("text-[#BDC1C2]");
            lost_post.classList.remove("text-white");

            found_post.classList.remove("text-[#BDC1C2]")
            found_post.classList.add("text-white")

            lost_post.classList.remove("pointer-events-none")
            found_post.classList.add("pointer-events-none")

            switcherMoveAnimation()
        };

        function switch_lost_animation(){
            found_post.classList.remove("text-white");
            found_post.classList.add("text-[#BDC1C2]");

            lost_post.classList.remove("text-[#BDC1C2]");
            lost_post.classList.add("text-white");

            lost_post.classList.add("pointer-events-none")
            found_post.classList.remove("pointer-events-none")

            switcherMoveAnimation()
        };

        function switcherMoveAnimation(){
            switcher_post.classList.toggle("opacity-80");
            
            setTimeout(() => {  
                switcher_post.classList.toggle("translate-x-full");
                switcher_post.classList.toggle("opacity-80");
            }, 700);
        }

        function changePostAnimation(){
            document.body.style.overflow = 'hidden';
            container_history.classList.add("translate-y-[200%]")
            
            setTimeout(() => {  
                changePostFeeds()
                container_history.classList.remove("translate-y-[200%]")
                document.body.style.overflow = 'visible';
            }, 1000);
        }

        function changePostFeeds(){
            lost_barang_history.classList.toggle("flex")
            lost_barang_history.classList.toggle("hidden")
            found_barang_history.classList.toggle("flex")
            found_barang_history.classList.toggle("hidden")
        }
    
    } else if (viewportWidth >= 1024){
        
        // Logic Switch Post (Mobile - Desktop)
        const lost_post_desktop = document.getElementById("lost-post-desktop");
        const found_post_desktop = document.getElementById("found-post-desktop");
        const switcher_post_desktop = document.getElementById("switcher-post-desktop");

        // Event Listener Switch (Mobile - Tablet)
        lost_post_desktop.addEventListener("click", () => {
            switch_lost_animation()
            changePostAnimation()
        });
        
        found_post_desktop.addEventListener("click", () => {
            switch_found_animation()
            changePostAnimation()
        });

        function switch_found_animation(){
            lost_post_desktop.classList.add("text-[#BDC1C2]");
            lost_post_desktop.classList.remove("text-white");

            found_post_desktop.classList.remove("text-[#BDC1C2]")
            found_post_desktop.classList.add("text-white")

            lost_post_desktop.classList.remove("pointer-events-none")
            found_post_desktop.classList.add("pointer-events-none")

            switcherMoveAnimation()
        };

        function switch_lost_animation(){
            found_post_desktop.classList.remove("text-white");
            found_post_desktop.classList.add("text-[#BDC1C2]");

            lost_post_desktop.classList.remove("text-[#BDC1C2]");
            lost_post_desktop.classList.add("text-white");

            lost_post_desktop.classList.add("pointer-events-none")
            found_post_desktop.classList.remove("pointer-events-none")

            switcherMoveAnimation()
        };

        function switcherMoveAnimation(){
            switcher_post_desktop.classList.toggle("opacity-80");
            
            setTimeout(() => {  
                switcher_post_desktop.classList.toggle("translate-x-full");
                switcher_post_desktop.classList.toggle("opacity-80");
            }, 700);
        }

        function changePostAnimation(){
            container_history.classList.add("translate-y-[200%]")
            
            setTimeout(() => {  
                changePostFeeds()
                container_history.classList.remove("translate-y-[200%]")
            }, 1000);
        }

        function changePostFeeds(){
            lost_barang_history.classList.toggle("flex")
            lost_barang_history.classList.toggle("hidden")
            found_barang_history.classList.toggle("flex")
            found_barang_history.classList.toggle("hidden")
        }

    }

})
