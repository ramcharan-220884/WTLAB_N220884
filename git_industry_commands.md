# Git Industry Commands Practice

---

# 1. Git Configuration Commands

## git config --global user.name

### Syntax

git config --global user.name "Your Name"

### Purpose

Sets the username that will be associated with your Git commits on the system.

### Example

git config --global user.name "ramcharan-220884"

### Screenshot

![screenshot](screenshots/git_config_username.png)

---

## git config --global user.email

### Syntax

git config --global user.email "your-email@example.com"

### Purpose

Sets the email address that will be associated with Git commits.

### Example

git config --global user.email "n220884@rguktn.ac.in"

### Screenshot

![screenshot](screenshots/git_config_email.png)

---

## git config --list

### Syntax

git config --list

### Purpose

Displays all Git configuration settings currently applied to the system.

### Screenshot

![screenshot](screenshots/git_config_list.png)

---

## git config --unset

### Syntax

git config --global --unset user.name

### Purpose

Removes a previously set Git configuration value.

### Screenshot

![screenshot](screenshots/git_config_unset.png)

---

# 2. Repository Setup Commands

## git init

### Syntax

git init

### Purpose

Initializes a new Git repository in the current directory.

### Screenshot

![screenshot](screenshots/git_init.png)

---

## git clone

### Syntax

git clone <repository-url>

### Purpose

Creates a copy of an existing remote repository on your local machine.

### Screenshot!

![screenshot](screenshots/git_clone.png)

---

## git clone --branch

### Syntax

git clone --branch <branch-name> <repository-url>

### Purpose

Clones a repository and checks out the specified branch.

### Screenshot

![screenshot](screenshots/git_clone_branch.png)

## git clone --depth

### Syntax

git clone --depth <number> <repository-url>

### Purpose

Creates a shallow clone with limited commit history.

### Screenshot

![screenshot](screenshots/git_clone_depth.png)

---

# 3. Repository Status & Inspection

## git status

### Syntax

git status

### Purpose

Shows the current state of the repository and staged changes.

### Screenshot

![screenshot](screenshots/git_status.png)

---

## git log

### Syntax

git log

### Purpose

Displays the full commit history of the repository.

### Screenshot

![screenshot](screenshots/git_log.png)

---

## git log --oneline

### Syntax

git log --oneline

### Purpose

Shows commit history in a simplified one-line format.

### Screenshot

![screenshot](screenshots/git_log_oneline.png)

---

## git log --graph

### Syntax

git log --graph

### Purpose

Displays commit history with a graphical representation of branches.

### Screenshot

![screenshot](screenshots/git_log_graph.png)

---

## git show

### Syntax

git show

### Purpose

Displays detailed information about a specific commit.

### Screenshot

![screenshot](screenshots/git_show.png)

---

## git diff

### Syntax

git diff

### Purpose

Shows changes between working directory and last commit.

### Screenshot

![screenshot](screenshots/git_diff.png)

---

## git diff --staged

### Syntax

git diff --staged

### Purpose

Displays differences between staged files and the last commit.

### Screenshot

![screenshot](screenshots/git_diff_staged.png)

---

## git blame

### Syntax

git blame <file-name>

### Purpose

Shows who modified each line of a file and when.

### Screenshot

![screenshot](screenshots/git_blame.png)

---

## git reflog

### Syntax

git reflog

### Purpose

Displays a history of all actions performed on HEAD.

### Screenshot

![screenshot](screenshots/git_reflog.png)

---

## git shortlog

### Syntax

git shortlog

### Purpose

Shows a summary of commit history grouped by author.

### Screenshot

![screenshot](screenshots/git_shortlog.png)

---

# 4. File Tracking Commands

## git add

### Syntax

git add <file-name>

### Purpose

Adds a specific file to the staging area.

### Screenshot

![screenshot](screenshots/git_shortlog.png)

---

## git add .

### Syntax

git add .

### Purpose

Adds all modified and new files to the staging area.

### Screenshot

![screenshot](screenshots/git_add_dot.png)

---

## git add -p

### Syntax

git add -p

### Purpose

Allows interactive staging of changes.

### Screenshot

![screenshot](screenshots/git_add_p.png)

---

## git restore

### Syntax

git restore <file-name>

### Purpose

Restores the file to the last committed version.

### Screenshot

![screenshot](screenshots/git_add_p.png)

---

## git restore --staged

### Syntax

git restore --staged <file-name>

### Purpose

Removes a file from the staging area.

### Screenshot

![screenshot](screenshots/git_restore_staged.png)

---

## git rm

### Syntax

git rm <file-name>

### Purpose

Deletes a file from the working directory and Git repository.

### Screenshot

![screenshot](screenshots/git_rm.png)

---

## git mv

### Syntax

git mv <old-name> <new-name>

### Purpose

Renames or moves a file while keeping Git tracking.

### Screenshot

![screenshot](screenshots/git_mv.png)

---

# 5. Commit Commands

## git commit

### Syntax

git commit

### Purpose

Records changes to the repository and opens a text editor for commit message.

### Screenshot

![screenshot](screenshots/git_commit_interactive.png)

---

## git commit -m

### Syntax

git commit -m "commit message"

### Purpose

Creates a commit with a message directly from the terminal.

### Screenshot

![screenshot](screenshots/git_commit_m.png)

---

## git commit --amend

### Syntax

git commit --amend

### Purpose

Modifies the most recent commit.

### Screenshot

![screenshot](screenshots/git_commit_amend.png)

---

## git commit --no-edit

### Syntax

git commit --amend --no-edit

### Purpose

Amends the last commit without changing the commit message.

### Screenshot

![screenshot](screenshots/git_commit_no_edit.png)

---

# 6. Branch Management Commands

## git branch

### Syntax

git branch

### Purpose

Lists all local branches in the repository.

### Screenshot

![screenshot](screenshots/git_branch.png)

---

## git branch -a

### Syntax

git branch -a

### Purpose

Displays both local and remote branches.

### Screenshot

![screenshot](screenshots/git_branch_a.png)

---

## git branch -d

### Syntax

git branch -d <branch-name>

### Purpose

Deletes a branch safely.

### Screenshot

![screenshot](screenshots/git_branch_d.png)

---

## git branch -D

### Syntax

git branch -D <branch-name>

### Purpose

Force deletes a branch.

### Screenshot

![screenshot](screenshots/git_branch_D_capital.png)

---

## git checkout

### Syntax

git checkout <branch-name>

### Purpose

Switches to another branch.

### Screenshot

![screenshot](screenshots/git_branch_D_capital.png)

---

## git checkout -b

### Syntax

git checkout -b <branch-name>

### Purpose

Creates a new branch and switches to it.

### Screenshot

![screenshot](screenshots/git_checkout_b.png)

---

## git switch

### Syntax

git switch <branch-name>

### Purpose

Switches to another branch.

### Screenshot

![screenshot](screenshots/git_checkout_b.png)

---

## git switch -c

### Syntax

git switch -c <branch-name>

### Purpose

Creates and switches to a new branch.

### Screenshot

![screenshot](screenshots/git_switch_c.png)

---

# 7. Merge & Integration Commands

## git merge

### Syntax

git merge <branch-name>

### Purpose

Combines changes from another branch into the current branch.

### Screenshot

![screenshot](screenshots/git_switch_c.png)

---

## git merge --no-ff

### Syntax

git merge --no-ff <branch-name>

### Purpose

Forces a merge commit even when fast-forward is possible.

### Screenshot

![screenshot](screenshots/git_merge_no_ff.png)

---

# 8. Remote Repository Commands

## git remote

### Syntax

git remote

### Purpose

Lists the names of remote repositories connected to the local repository.

### Example

git remote

### Screenshot

![screenshot](screenshots/git_remote.png)

---

## git remote -v

### Syntax

git remote -v

### Purpose

Displays remote repository URLs for fetch and push operations.

### Example

git remote -v

### Screenshot

![screenshot](screenshots/git_remote_v.png)

---

## git remote add

### Syntax

git remote add origin <repository-url>

### Purpose

Adds a remote repository connection to the local project.

### Example

git remote add origin https://github.com/neeraj-220622/demo-git.git

### Screenshot

![screenshot](screenshots/git_remote_add.png)

---

## git remote remove

### Syntax

git remote remove origin

### Purpose

Removes a remote repository from the project.

### Example

git remote remove origin

### Screenshot

![screenshot](screenshots/git_remote_remove.png)

---

## git fetch

### Syntax

git fetch

### Purpose

Downloads commits and objects from the remote repository without merging them.

### Example

git fetch origin

### Screenshot

![screenshot](screenshots/git_fetch.png)

---

## git fetch --all

### Syntax

git fetch --all

### Purpose

Fetches updates from all configured remote repositories.

### Example

git fetch --all

### Screenshot

![screenshot](screenshots/git_fetch_all.png)

---

## git pull

### Syntax

git pull

### Purpose

Fetches and merges changes from the remote repository into the current branch.

### Example

git pull origin main

### Screenshot

![screenshot](screenshots/git_pull.png)

---

## git pull --rebase

### Syntax

git pull --rebase

### Purpose

Fetches remote changes and rebases local commits on top of them to maintain a linear history.

### Example

git pull --rebase origin main

### Screenshot

![screenshot](screenshots/git_pull_rebase.png)

---

## git push

### Syntax

git push

### Purpose

Uploads local commits to the remote repository.

### Example

git push origin main

### Screenshot

![screenshot](screenshots/git_push.png)

---

## git push -u origin branch-name

### Syntax

git push -u origin feature

### Purpose

Pushes a branch to the remote repository and sets the upstream tracking branch.

### Example

git push -u origin feature

### Screenshot

![screenshot](screenshots/git_push_upstream.png)

---

## git push --force

### Syntax

git push --force

### Purpose

Forces Git to overwrite the remote repository history with local changes.

### Example

git push --force origin main

### Screenshot

![screenshot](screenshots/git_push_force.png)

---

# 9. Stash Commands

## git stash

### Syntax

git stash

### Purpose

Temporarily saves uncommitted changes so the working directory becomes clean.

### Example

git stash

### Screenshot

![screenshot](screenshots/git_stash.png)

---

## git stash list

### Syntax

git stash list

### Purpose

Displays all stashed changes.

### Example

git stash list

### Screenshot

![screenshot](screenshots/git_stash_list.png)

---

## git stash pop

### Syntax

git stash pop

### Purpose

Applies the latest stash and removes it from the stash list.

### Example

git stash pop

### Screenshot

![screenshot](screenshots/git_stash_pop.png)

---

## git stash apply

### Syntax

git stash apply

### Purpose

Applies a stash without removing it from the stash list.

### Example

git stash apply

### Screenshot

![screenshot](screenshots/git_stash_apply.png)

---

## git stash drop

### Syntax

git stash drop stash@{0}

### Purpose

Deletes a specific stash from the stash list.

### Example

git stash drop stash@{0}

### Screenshot

![screenshot](screenshots/git_stash_drop.png)

---

## git stash clear

### Syntax

git stash clear

### Purpose

Deletes all saved stashes.

### Example

git stash clear

### Screenshot

![screenshot](screenshots/git_stash_clear.png)

---

# 10. Reset & Undo Commands

## git reset

### Syntax

git reset HEAD~1

### Purpose

Moves the current branch pointer to a previous commit.

### Example

git reset HEAD~1

### Screenshot

![screenshot](screenshots/git_stash_clear.png)

---

## git reset --soft

### Syntax

git reset --soft HEAD~1

### Purpose

Moves HEAD to a previous commit but keeps changes staged.

### Example

git reset --soft HEAD~1

### Screenshot

![screenshot](screenshots/git_reset_soft.png)

---

## git reset --mixed

### Syntax

git reset --mixed HEAD~1

### Purpose

Moves HEAD to a previous commit and unstages changes.

### Example

git reset --mixed HEAD~1

### Screenshot

![screenshot](screenshots/git_reset_mixed.png)

---

## git reset --hard

### Syntax

git reset --hard HEAD~1

### Purpose

Moves HEAD to a previous commit and deletes all changes in the working directory.

### Example

git reset --hard HEAD~1

### Screenshot

![screenshot](screenshots/git_reset_hard.png)

---

## git revert

### Syntax

git revert HEAD

### Purpose

Creates a new commit that reverses the changes introduced by a previous commit.

### Example

git revert HEAD

### Screenshot

![screenshot](screenshots/git_revert.png)

---

## git clean -f

### Syntax

git clean -f

### Purpose

Removes untracked files from the working directory.

### Example

git clean -f

### Screenshot

![screenshot](screenshots/git_clean_f.png)

---

## git clean -fd

### Syntax

git clean -fd

### Purpose

Removes untracked files and directories.

### Example

git clean -fd

### Screenshot

![screenshot](screenshots/git_clean_f.png)


# 11. Rebasing Commands

## git rebase

### Syntax
git rebase <branch-name>

### Purpose
Reapplies commits from the current branch on top of another branch, creating a cleaner and linear commit history.

### Example
git rebase main

### Screenshot
![screenshot](screenshots/git_clean_fd.png)

---

## git rebase -i

### Syntax
git rebase -i HEAD~3

### Purpose
Starts an interactive rebase that allows you to edit, reorder, squash, or remove commits.

### Example
git rebase -i HEAD~3

### Screenshot
![screenshot](screenshots/git_rebase_interactive.png)

---

## git rebase --continue

### Syntax
git rebase --continue

### Purpose
Continues the rebasing process after resolving conflicts.

### Example
git add file.txt  
git rebase --continue

### Screenshot
![screenshot](screenshots/git_rebase_continue.png)

---

## git rebase --abort

### Syntax
git rebase --abort

### Purpose
Stops the rebase process and returns the repository to the state before the rebase started.

### Example
git rebase --abort

### Screenshot
![screenshot](screenshots/git_rebase_abort.png)

---

# 12. Cherry Pick & Patch Commands

## git cherry-pick

### Syntax
git cherry-pick <commit-id>

### Purpose
Applies a specific commit from another branch to the current branch.

### Example
git cherry-pick a1b2c3d

### Screenshot
![screenshot](screenshots/git_cherry_pick.png)

---

## git format-patch

### Syntax
git format-patch -1 HEAD

### Purpose
Creates a patch file from commits that can be shared or applied to another repository.

### Example
git format-patch -1 HEAD

### Screenshot
![screenshot](screenshots/git_format_patch.png)

---

## git apply

### Syntax
git apply <patch-file>

### Purpose
Applies the changes from a patch file to the working directory.

### Example
git apply 0001-feature-commit.patch

### Screenshot
![screenshot](screenshots/git_apply.png)

---

## git am

### Syntax
git am <patch-file>

### Purpose
Applies a patch and automatically creates a commit with the patch's commit message.

### Example
git am 0001-feature-commit.patch

### Screenshot
![screenshot](screenshots/git_am.png)

---

# 13. Tagging Commands

## git tag

### Syntax
git tag

### Purpose
Lists all tags in the repository.

### Example
git tag

### Screenshot
![screenshot](screenshots/git_tag.png)

---

## git tag -a

### Syntax
git tag -a v1.0 -m "First release"

### Purpose
Creates an annotated tag with a message.

### Example
git tag -a v1.0 -m "First release"

### Screenshot
![screenshot](screenshots/git_tag_annotated.png)

---

## git tag -d

### Syntax
git tag -d v1.0

### Purpose
Deletes a tag from the local repository.

### Example
git tag -d v1.0

### Screenshot
![screenshot](screenshots/git_tag_delete.png)

---

## git push origin --tags

### Syntax
git push origin --tags

### Purpose
Pushes all local tags to the remote repository.

### Example
git push origin --tags

### Screenshot
![screenshot](screenshots/git_push_tags.png)

---

# 14. Submodule Commands

## git submodule add

### Syntax
git submodule add <repository-url>

### Purpose
Adds another Git repository as a submodule inside the current repository.

### Example
git submodule add https://github.com/git/git.git

### Screenshot
![screenshot](screenshots/git_submodule_add.png)

---

## git submodule init

### Syntax
git submodule init

### Purpose
Initializes the submodule configuration defined in the repository.

### Example
git submodule init

### Screenshot
![screenshot](screenshots/git_submodule_init.png)

---

## git submodule update

### Syntax
git submodule update

### Purpose
Fetches and checks out the correct version of the submodule.

### Example
git submodule update

### Screenshot
![screenshot](screenshots/git_submodule_update.png)

---

# 15. Debugging Commands

## git bisect

### Syntax
git bisect

### Purpose
Helps find the commit that introduced a bug by performing a binary search through commit history.

### Example
git bisect

### Screenshot
![screenshot](screenshots/git_bisect.png)

---

## git bisect start

### Syntax
git bisect start

### Purpose
Starts the bisect process to locate a faulty commit.

### Example
git bisect start

### Screenshot
![screenshot](screenshots/git_bisect_start.png)

---

## git bisect good

### Syntax
git bisect good <commit-id>

### Purpose
Marks a commit where the bug did not exist.

### Example
git bisect good a1b2c3d

### Screenshot
![screenshot](screenshots/git_bisect_good.png)

---

## git bisect bad

### Syntax
git bisect bad

### Purpose
Marks the current commit as containing the bug.

### Example
git bisect bad

### Screenshot
![screenshot](screenshots/git_bisect_bad.png)
