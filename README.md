# dispatch-symfony

A small Symfony 7.0 application used as the target for the Obvious agent demo.

The pinned versions are intentionally a little behind current (Symfony 7.0,
`composer audit` reports a handful of advisories) so the agent has realistic
surfaces to plan changes against: add endpoints, extend services, fix bugs,
or bump dependencies.

## Routes

| Method | Path             | Returns                               |
|--------|------------------|---------------------------------------|
| GET    | `/`              | `{ app, message }`                    |
| GET    | `/hello/{name}`  | `{ message: "Hello, <name>!" }`       |

## Run locally

```bash
composer install
symfony serve            # or: php -S 127.0.0.1:8000 -t public
```

## How the Obvious demo flow works against this repo

1. Open an issue describing a small feature or bug fix.
2. Mention `@obvious-poc` (or assign the issue to the bot) to trigger the agent.
3. The agent posts a Markdown plan as an issue comment.
4. Reply with `approve` to let the agent implement the plan.
5. The agent opens a draft PR with the changes.
6. Approve the PR (in GitHub or the dashboard) to merge it and auto-close the issue.

Sample issues to try:

- "Add a `/healthz` endpoint that returns `{ status: ok }`."
- "Return 404 instead of 500 when `/hello/{name}` receives a name longer than 64 chars."
- "Add a `/version` endpoint that returns the Symfony version and PHP version."
- "Bump `symfony/http-foundation` to a patched release to clear current security advisories."
