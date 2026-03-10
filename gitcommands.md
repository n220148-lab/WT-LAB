# Git Industry Commands Documentation
Author: Vasim-220148

====================================================

1. git config --global user.name
Syntax:
git config --global user.name "Vasim-220148"

Purpose:
Sets the global Git username used for commits.

Example:
git config --global user.name "Vasim-220148"

Screenshot:
![Screenshot](Screenshot1.jpg)

----------------------------------------------------

2. git config --global user.email
Syntax:
git config --global user.email "n220148@rguktn.ac.in"

Purpose:
Sets the global Git email used for commits.

Example:
git config --global user.email "n220148@rguktn.ac.in"

Screenshot:
![Screenshot](Screenshot2.jpg)

----------------------------------------------------

3. git config --list
Syntax:
git config --list

Purpose:
Displays all Git configuration settings.

Example:
git config --list

Screenshot:
![Screenshot](Screenshot3.jpg)

----------------------------------------------------

4. git config --unset
Syntax:
git config --unset <key>

Purpose:
Removes a configuration entry.

Example:
git config --global --unset user.name

Screenshot:
![Screenshot](Screenshot4.jpg)

----------------------------------------------------

5. git init
Syntax:
git init

Purpose:
Initializes a new Git repository.

Example:
git init

Screenshot:
![Screenshot](Screenshot5.jpg)

----------------------------------------------------

6. git clone
Syntax:
git clone <repository-url>

Purpose:
Copies a remote repository.

Example:
git clone https://github.com/Vasim-220148/sample-project.git

Screenshot:
![Screenshot](Screenshot6.jpg)

----------------------------------------------------

7. git clone --branch
Syntax:
git clone --branch <branch-name> <repository-url>

Purpose:
Clones a specific branch.

Example:
git clone --branch main https://github.com/Vasim-220148/sample-project.git

Screenshot:
![Screenshot](Screenshot7.jpg)

----------------------------------------------------

8. git clone --depth
Syntax:
git clone --depth 1 <repository-url>

Purpose:
Creates a shallow clone.

Example:
git clone --depth 1 https://github.com/Vasim-220148/sample-project.git

Screenshot:
![Screenshot](Screenshot8.jpg)

----------------------------------------------------

9. git status
Syntax:
git status

Purpose:
Shows repository status.

Example:
git status

Screenshot:
![Screenshot](Screenshot9.jpg)

----------------------------------------------------

10. git log
Syntax:
git log

Purpose:
Shows commit history.

Example:
git log

Screenshot:
![Screenshot](Screenshot10.jpg)

----------------------------------------------------

11. git log --oneline
Syntax:
git log --oneline

Purpose:
Shows commit history in one line.

Example:
git log --oneline

Screenshot:
![Screenshot](Screenshot11.jpg)

----------------------------------------------------

12. git log --graph
Syntax:
git log --graph --oneline

Purpose:
Displays commit graph.

Example:
git log --graph --oneline

Screenshot:
![Screenshot](Screenshot12.jpg)

----------------------------------------------------

13. git show
Syntax:
git show HEAD

Purpose:
Displays details of the latest commit.

Example:
git show HEAD

Screenshot:
![Screenshot](Screenshot13.jpg)

----------------------------------------------------

14. git diff
Syntax:
git diff

Purpose:
Shows file differences.

Example:
git diff

Screenshot:
![Screenshot](Screenshot14.jpg)

----------------------------------------------------

15. git diff --staged
Syntax:
git diff --staged

Purpose:
Shows staged differences.

Example:
git diff --staged

Screenshot:
![Screenshot](Screenshot15.jpg)

----------------------------------------------------

16. git blame
Syntax:
git blame <file>

Purpose:
Shows author for each line.

Example:
git blame README.md

Screenshot:
![Screenshot](Screenshot16.jpg)

----------------------------------------------------

17. git reflog
Syntax:
git reflog

Purpose:
Shows reference log.

Example:
git reflog

Screenshot:
![Screenshot](Screenshot17.jpg)

----------------------------------------------------

18. git shortlog
Syntax:
git shortlog

Purpose:
Summarizes commits by author.

Example:
git shortlog

Screenshot:
![Screenshot](Screenshot18.jpg)

----------------------------------------------------

19. git add
Syntax:
git add <file>

Purpose:
Adds file to staging area.

Example:
git add file1.txt

Screenshot:
![Screenshot](Screenshot19.jpg)

----------------------------------------------------

20. git add .
Syntax:
git add .

Purpose:
Adds all files.

Example:
git add .

Screenshot:
![Screenshot](Screenshot20.jpg)

----------------------------------------------------

21. git add -A
Syntax:
git add -A

Purpose:
Adds all changes.

Example:
git add -A

Screenshot:
![Screenshot](Screenshot21.jpg)

----------------------------------------------------

22. git restore
Syntax:
git restore <file>

Purpose:
Restores file changes.

Example:
git restore file1.txt

Screenshot:
![Screenshot](Screenshot22.jpg)

----------------------------------------------------

23. git restore --staged
Syntax:
git restore --staged <file>

Purpose:
Unstages a file.

Example:
git restore --staged file1.txt

Screenshot:
![Screenshot](Screenshot23.jpg)

----------------------------------------------------

24. git rm
Syntax:
git rm <file>

Purpose:
Deletes file.

Example:
git rm oldfile.txt

Screenshot:
![Screenshot](Screenshot24.jpg)

----------------------------------------------------

25. git mv
Syntax:
git mv old.txt new.txt

Purpose:
Renames file.

Example:
git mv old.txt new.txt

Screenshot:
![Screenshot](Screenshot25.jpg)

----------------------------------------------------

26. git commit
Syntax:
git commit

Purpose:
Records changes.

Example:
git commit

Screenshot:
![Screenshot](Screenshot26.jpg)

----------------------------------------------------

27. git commit -m
Syntax:
git commit -m "message"

Purpose:
Commit with message.

Example:
git commit -m "Initial commit"

Screenshot:
![Screenshot](Screenshot27.jpg)

----------------------------------------------------

28. git commit --amend
Syntax:
git commit --amend

Purpose:
Modify last commit.

Example:
git commit --amend

Screenshot:
![Screenshot](Screenshot28.jpg)

----------------------------------------------------

29. git branch
Example:
git branch

Screenshot:
![Screenshot](Screenshot29.jpg)

----------------------------------------------------

30. git branch -a
Example:
git branch -a

Screenshot:
![Screenshot](Screenshot30.jpg)

----------------------------------------------------

31. git branch -d
Example:
git branch -d feature

Screenshot:
![Screenshot](Screenshot31.jpg)

----------------------------------------------------

32. git branch -D
Example:
git branch -D feature

Screenshot:
![Screenshot](Screenshot32.jpg)

----------------------------------------------------

33. git checkout
Example:
git checkout main

Screenshot:
![Screenshot](Screenshot33.jpg)

----------------------------------------------------

34. git checkout -b
Example:
git checkout -b new-feature

Screenshot:
![Screenshot](Screenshot34.jpg)

----------------------------------------------------

35. git switch
Example:
git switch main

Screenshot:
![Screenshot](Screenshot35.jpg)

----------------------------------------------------

36. git switch -c
Example:
git switch -c dev

Screenshot:
![Screenshot](Screenshot36.jpg)

----------------------------------------------------

37. git merge
Example:
git merge feature

Screenshot:
![Screenshot](Screenshot37.jpg)

----------------------------------------------------

38. git merge --no-ff
Example:
git merge --no-ff feature

Screenshot:
![Screenshot](Screenshot38.jpg)

----------------------------------------------------

39. git remote
Example:
git remote

Screenshot:
![Screenshot](Screenshot39.jpg)

----------------------------------------------------

40. git remote -v
Example:
git remote -v

Screenshot:
![Screenshot](Screenshot40.jpg)

----------------------------------------------------

41. git remote add
Example:
git remote add origin https://github.com/Vasim-220148/project.git

Screenshot:
![Screenshot](Screenshot41.jpg)

----------------------------------------------------

42. git remote remove
Example:
git remote remove origin

Screenshot:
![Screenshot](Screenshot42.jpg)

----------------------------------------------------

43. git fetch
Example:
git fetch

Screenshot:
![Screenshot](Screenshot43.jpg)

----------------------------------------------------

44. git fetch --all
Example:
git fetch --all

Screenshot:
![Screenshot](Screenshot44.jpg)

----------------------------------------------------

45. git pull
Example:
git pull

Screenshot:
![Screenshot](Screenshot45.jpg)

----------------------------------------------------

46. git pull --rebase
Example:
git pull --rebase

Screenshot:
![Screenshot](Screenshot46.jpg)

----------------------------------------------------

47. git push
Example:
git push

Screenshot:
![Screenshot](Screenshot47.jpg)

----------------------------------------------------

48. git push -u origin main
Example:
git push -u origin main

Screenshot:
![Screenshot](Screenshot48.jpg)

----------------------------------------------------

49. git push --force
Example:
git push --force

Screenshot:
![Screenshot](Screenshot49.jpg)

----------------------------------------------------

50. git stash
Example:
git stash

Screenshot:
![Screenshot](Screenshot50.jpg)

----------------------------------------------------

51. git stash list

Screenshot:
![Screenshot](Screenshot51.jpg)

----------------------------------------------------

52. git stash pop

Screenshot:
![Screenshot](Screenshot52.jpg)

----------------------------------------------------

53. git stash apply

Screenshot:
![Screenshot](Screenshot53.jpg)

----------------------------------------------------

54. git stash drop

Screenshot:
![Screenshot](Screenshot54.jpg)

----------------------------------------------------

55. git stash clear

Screenshot:
![Screenshot](Screenshot55.jpg)

----------------------------------------------------

56. git reset
Example:
git reset HEAD

Screenshot:
![Screenshot](Screenshot56.jpg)

----------------------------------------------------

57. git reset --soft
Example:
git reset --soft HEAD~1

Screenshot:
![Screenshot](Screenshot57.jpg)

----------------------------------------------------

58. git reset --mixed
Example:
git reset --mixed HEAD~1

Screenshot:
![Screenshot](Screenshot58.jpg)

----------------------------------------------------

59. git reset --hard
Example:
git reset --hard HEAD~1

Screenshot:
![Screenshot](Screenshot59.jpg)

----------------------------------------------------

60. git revert
Example:
git revert HEAD

Screenshot:
![Screenshot](Screenshot60.jpg)

----------------------------------------------------

61. git clean -f

Screenshot:
![Screenshot](Screenshot61.jpg)

----------------------------------------------------

62. git clean -fd

Screenshot:
![Screenshot](Screenshot62.jpg)

----------------------------------------------------

63. git rebase
Example:
git rebase main

Screenshot:
![Screenshot](Screenshot63.jpg)

----------------------------------------------------

64. git rebase -i

Screenshot:
![Screenshot](Screenshot64.jpg)

----------------------------------------------------

65. git rebase --continue

Screenshot:
![Screenshot](Screenshot65.jpg)

----------------------------------------------------

66. git rebase --abort

Screenshot:
![Screenshot](Screenshot66.jpg)

----------------------------------------------------

67. git cherry-pick
Example:
git cherry-pick commit-id

Screenshot:
![Screenshot](Screenshot67.jpg)

----------------------------------------------------

68. git format-patch

Screenshot:
![Screenshot](Screenshot68.jpg)

----------------------------------------------------

69. git apply

Screenshot:
![Screenshot](Screenshot69.jpg)

----------------------------------------------------

70. git tag
Example:
git tag

Screenshot:
![Screenshot](Screenshot70.jpg)

----------------------------------------------------

71. git tag -a
Example:
git tag -a v1.0 -m "version 1.0"

Screenshot:
![Screenshot](Screenshot71.jpg)

----------------------------------------------------

72. git tag -d

Screenshot:
![Screenshot](Screenshot72.jpg)

----------------------------------------------------

73. git push --tags

Screenshot:
![Screenshot](Screenshot73.jpg)

----------------------------------------------------

74. git submodule add

Screenshot:
![Screenshot](Screenshot74.jpg)

----------------------------------------------------

75. git bisect

Screenshot:
![Screenshot](Screenshot75.jpg)

----------------------------------------------------