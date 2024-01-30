import { LoaderFunction } from "@remix-run/node";
import { useLoaderData } from "@remix-run/react";

export interface User {
    login: string;
    avatar_url: string;
    html_url: string;
    bio: string | null;
}

export interface useLoaderData {
    user: User
}

export const loader: LoaderFunction = async ({ params }) => {
    const res = await fetch(`https://api.github.com/users/${params.username}`, {
        headers: {
            Accept: "application/vnd.github.v3+json",
            Authorization: `token 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`,
        },
    });

    return {
        user: await res.json(),
    };
};

export default function Index() {
    const { user } = useLoaderData<useLoaderData>();

    return (
        <>
            <h1>{user.login}</h1>
            <blockquote>{user.bio}</blockquote>
            <a href={user.html_url}>GitHub profile</a>
            <img src={user.avatar_url} alt={user.login} width={200} />
        </>
    );
}