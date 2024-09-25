<style>
    .event-img {
        height: 300px; /* Set a fixed height for all image containers */
        overflow: hidden; /* This ensures that images larger than the container are hidden */
        position: relative;
    }

    .event-img img {
        width: 100%; /* Ensure the image takes the full width */
        height: 100%; /* Ensure the image fills the container's height */
        object-fit: cover; /* Maintain the aspect ratio and ensure the image covers the entire container */
        position: absolute;
        top: 0;
        left: 0;
    }

    .event-title {
        display: -webkit-box; /* Use Flexbox for display */
        -webkit-box-orient: vertical; /* Vertical orientation */
        -webkit-line-clamp: 1; /* Show only one line */
        overflow: hidden; /* Hide overflowed text */
        text-overflow: ellipsis; /* Show ellipsis */
        max-width: 400px; /* Adjust to your desired width */
        white-space: normal; /* Allow normal wrapping */
    }


    .event-text {
        display: -webkit-box; /* Use Flexbox for display */
        -webkit-box-orient: vertical; /* Vertical orientation */
        -webkit-line-clamp: 1; /* Show only one line */
        overflow: hidden; /* Hide overflowed text */
        text-overflow: ellipsis; /* Show ellipsis */
        max-width: 800px; /* Adjust to your desired width */
        white-space: normal; /* Allow normal wrapping */
    }
</style>