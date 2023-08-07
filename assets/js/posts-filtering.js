function postsFiltering() {
    const posts = document.querySelectorAll("a.post");
    const allPosts = document.getElementById("all_posts");
    const categories = document.querySelectorAll(".category");

    allPosts.onclick = () => {
        allPosts.dataset.active = "true";
        
        categories.forEach((category) => {
            category.dataset.active = "false";
        });

        posts.forEach((post) => {
            post.dataset.visible = "true";
        });
    };

    categories.forEach((category) => {
        const slug = category.dataset.slug;

        category.onclick = () => {
            allPosts.dataset.active = "false";
            category.dataset.active = "true";

            categories.forEach((category) => {
                if (category.dataset.slug !== slug) {
                    category.dataset.active = "false";
                };
            });

            posts.forEach((post) => {
                if (post.dataset.slug === slug) {
                    post.dataset.visible = "true";
                } else {
                    post.dataset.visible = "false";
                };
            });
        };
    });
};
postsFiltering();