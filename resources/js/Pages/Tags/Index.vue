<template>
    <Navbar/>

    <br>
    <table >
        <tr style="background-color:#fafafa; ">
            <th>
                Id
            </th>

            <th>
                Name
            </th>

            <th>
                Options
            </th>
        </tr>

        <tbody>
            <tr
                v-for="tag in $page.props.tags"
                :key="tag.id"
            >
                <td>{{ tag.id }}</td>
                <td>{{ tag.name }}</td>
                <td>
                   <Link :href="route('tags.show', tag.id)">
                       <button>
                           View
                       </button>
                   </Link>

                    <button>
                        Edit
                    </button>

                    <button>
                        Delete
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
import Navbar from "@/Components/Navbar.vue";
import { Link } from '@inertiajs/vue3'
export default {
    components: {Navbar, Link}

}
</script>
<style>
    table{
        width: 100%;
    }

    table,th,td{
        padding: 0.5rem
    }

    tbody td{
        border-bottom: 1px solid grey;
    }
    button{
        margin-right: 3px;
        margin-left: 3px;
    }
</style>
