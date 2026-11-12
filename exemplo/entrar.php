<!doctype html>
<html lang="pt-PT">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Entrar · Aragem</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,700&family=IBM+Plex+Mono:wght@400;500&family=IBM+Plex+Sans:wght@400;500;600&display=swap"
    />
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
    <script src="js/menu.js" defer></script>
  </head>
  <body
    class="bg-slate-100 text-slate-900 font-['IBM_Plex_Sans',sans-serif] antialiased min-h-screen flex flex-col"
  >
    <?php require __DIR__ . "/inc/header.php"; ?>

    <main class="flex-1 px-4 py-12 flex items-start justify-center">
      <div class="w-full max-w-sm flex flex-col gap-6">
        <div class="text-center">
          <h1
            class="font-['Bricolage_Grotesque',sans-serif] text-3xl font-bold tracking-tight"
          >
            Entrar
          </h1>
          <p class="text-slate-500 mt-1">
            Para seguir locais e publicar relatos.
          </p>
        </div>

        <!-- Mais tarde: action="login.php" method="post" com sessões PHP -->
        <form
          action="#"
          method="post"
          class="rounded-lg border border-slate-200 bg-white p-6 flex flex-col gap-4"
        >
          <div class="flex flex-col gap-1">
            <label for="email" class="text-sm font-medium">Email</label>
            <input
              id="email"
              name="email"
              type="email"
              required
              autocomplete="email"
              placeholder="nome@exemplo.pt"
              class="rounded border border-slate-300 bg-slate-50 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-sky-600"
            />
          </div>
          <div class="flex flex-col gap-1">
            <div class="flex items-baseline justify-between">
              <label for="password" class="text-sm font-medium"
                >Palavra-passe</label
              >
              <a href="#" class="text-xs text-sky-700 hover:underline"
                >Esqueceu-se?</a
              >
            </div>
            <!-- Exercício 1: o botão "Mostrar" é controlado por js/palavra-passe.js -->
            <div class="relative">
              <input
                id="password"
                name="password"
                type="password"
                required
                minlength="8"
                autocomplete="current-password"
                class="w-full rounded border border-slate-300 bg-slate-50 pl-3 pr-20 py-2 focus:outline-none focus:ring-2 focus:ring-sky-600"
              />
              <button
                type="button"
                id="mostrar-password"
                aria-controls="password"
                aria-pressed="false"
                class="absolute inset-y-0 right-0 px-3 text-xs font-semibold text-sky-700 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-sky-600 rounded"
              >
                Mostrar
              </button>
            </div>
          </div>
          <label class="flex items-center gap-2 text-sm">
            <input
              id="lembrar"
              name="lembrar"
              type="checkbox"
              class="h-4 w-4 rounded border-slate-300 accent-sky-700"
            />
            Manter sessão iniciada
          </label>
          <button
            type="submit"
            class="rounded bg-sky-700 text-white font-semibold py-2.5 hover:bg-sky-800 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-sky-600"
          >
            Entrar
          </button>
        </form>

        <p class="text-center text-sm text-slate-600">
          Ainda não tem conta?
          <a href="#" class="font-medium text-sky-700 hover:underline"
            >Criar conta</a
          >
        </p>
      </div>
    </main>

    <footer class="border-t border-slate-200">
      <div
        class="mx-auto max-w-6xl px-4 py-6 text-xs text-slate-500 flex flex-wrap justify-between gap-2"
      >
        <p>Aragem · projeto de demonstração para Aplicações Web</p>
        <p>Previsões: Open-Meteo · todos os valores são dados de exemplo</p>
      </div>
    </footer>
    <script>
      const caixaPassword = document.getElementById("password");
      const btnPassword = document.getElementById("mostrar-password");
      // const btnPassword = document.querySelector("#mostrar-password");

      btnPassword.addEventListener("click", () => {
        //console.log("click no btn");

        mostrar = caixaPassword.getAttribute("type") == "password";

        if (mostrar) {
          caixaPassword.setAttribute("type", "text");
          btnPassword.textContent = "Esconder";
        } else {
          caixaPassword.setAttribute("type", "password");
          btnPassword.textContent = "Mostrar";
        }
      });
    </script>
  </body>
</html>
