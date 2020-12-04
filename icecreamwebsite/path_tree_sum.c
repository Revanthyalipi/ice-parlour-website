/**
 * Definition for a binary tree node.
 * struct TreeNode {
 *     int val;
 *     struct TreeNode *left;
 *     struct TreeNode *right;
 * };
 */
 bool check(struct TreeNode* root, int sum) {
        if (!root)
            return false;
        if (!root->left && !root->right) {
            if (root->val == sum)
                return true;
            return false;
        }
        return check(root->left, sum - root->val) || check(root->right, sum - root->val);
    }
bool hasPathSum(struct TreeNode* root, int sum){
        return check(root,sum);
}