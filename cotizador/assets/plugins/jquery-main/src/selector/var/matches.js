import documentElement from "../../var/documentElement.js";

// Support: IE 9 - 11+
// IE requires a prefix.
export default documentElement.matches || documentElement.msMatchesSelector;
