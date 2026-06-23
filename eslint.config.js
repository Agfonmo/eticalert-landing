import globals from "globals";

export default [
  {
    files: ["js/**/*.js"],
    languageOptions: {
      ecmaVersion: 2020,
      sourceType: "script",
      globals: {
        ...globals.browser,
        gtag: "readonly",
      },
    },
    rules: {
      "no-unused-vars": "warn",
      "no-undef": "error",
      "no-console": "off",
      "eqeqeq": ["error", "always"],
      "no-var": "off",
      "prefer-const": "off",
    },
  },
];
