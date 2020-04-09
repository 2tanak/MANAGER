git giff дает информацию что изменено в файле
если файл не добавлен в отслеживымые



если файл находитс€ уже в отслеживыемых то
git giff --cached
нова€ команда
git giff --staged













„тобы увидеть, что же вы изменили, но пока не проиндексировали, наберите git diff без аргументов:

$ git diff
diff --git a/benchmarks.rb b/benchmarks.rb
index 3cb747f..da65585 100644
--- a/benchmarks.rb
+++ b/benchmarks.rb
@@ -36,6 +36,10 @@ def main
           @commit.parents[0].parents[0].parents[0]
         end

+        run_code(x, 'commits 1') do
+          git.commits.size
+        end
+
         run_code(x, 'commits 2') do
           log = git.commits('master', 15)
           log.size
